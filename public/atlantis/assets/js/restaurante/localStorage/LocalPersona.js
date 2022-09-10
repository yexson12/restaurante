class LocalPersona {

    constructor(){
        this.kodoti = new KodotiLocalCache('kodoti');
        this.NAME_LOCAL = 'persona';
        if(!this.existLocalStorage()){
            this.kodoti.add(this.NAME_LOCAL, []);
        }
    }

    get personas(){
        return this.kodoti.get(this.NAME_LOCAL);
    }

    get_by_index(index){
        let data = []
        for(let item of this.personas){
            if(item.index == index){
                data.push(item);
            }
        }
        return data;
    }

    get_ultimos_elementos(cantidad){
        let personas = this.personas;
        const inicio = personas.length - cantidad;
        const fin = personas.length;
        return personas.slice(inicio, fin);
    }

    agregar_persona(){
        let personas = this.personas;
        const index = this.ultimo_index() + 1;
        personas.push(
            {
                index: index, 
                nombre: 'Persona ' + index,
                items_asignado: [],
                monto_por_items: 0,
                monto_personalizado: 0
            }
        );
        this.kodoti.add(this.NAME_LOCAL, personas);
    }

    //mitad de la cuenta
    agregar_monto_personalizado(monto_personalizado){
        let personas = this.personas;
        let new_array = []
        for (let item of this.personas) {
            item.monto_personalizado = monto_personalizado;
            new_array.push(item);
        }
        this.kodoti.add(this.NAME_LOCAL, personas);
    }

    guardar_platos(index_persona, datos){
        // añadir o actualizar
        let personas = this.personas;
        const indice_persona = personas.findIndex((elemento) => elemento.index == index_persona);
        
        let platos_asignados = personas[indice_persona].items_asignado;
        
        for (let item of datos){
            if ( platos_asignados.find(elemento => elemento.index == item.index) != undefined ){
                //actualizar cantidad
                console.log("actualizar plato")
                this.actualizar_plato(indice_persona, item);
            } else {
                //agregar
                console.log("agregar plato")
                this.añadir_plato(indice_persona, item);
            }
        }
    }

    añadir_plato(indice_persona, item){
        let personas = this.personas;
        let platos_asignados = this.personas[indice_persona].items_asignado;
        platos_asignados.push(item);
        personas[indice_persona].items_asignado = platos_asignados;
        this.kodoti.add(this.NAME_LOCAL, personas);
    }
    actualizar_plato(indice_persona, item){
        let personas = this.personas;
        let platos_asignados = this.personas[indice_persona].items_asignado;
        const indice_plato = platos_asignados.findIndex(elemento => elemento.index == item.index)
        platos_asignados[indice_plato].cantidad = parseInt(item.cantidad) + parseInt(platos_asignados[indice_plato].cantidad);
        personas[indice_persona].items_asignado = platos_asignados;
        this.kodoti.add(this.NAME_LOCAL, personas);
    }
    actualizar_cantidad(index_persona, item){
        let personas = this.personas;
        let indice_persona = this.personas.findIndex((elemento) => elemento.index == index_persona);
        
        personas[indice_persona].items_asignado = item;
        
        this.kodoti.add(this.NAME_LOCAL, personas);
    }
    borrar_plato(index_persona, index_plato){
        let personas = this.personas;
        let indice_persona = personas.findIndex((elemento) => elemento.index == index_persona);
        const new_data = personas[indice_persona].items_asignado.filter((item) => parseInt(item.index) != parseInt(index_plato));
        personas[indice_persona].items_asignado = new_data;
        this.kodoti.add(this.NAME_LOCAL, personas);
    }
    borrar_persona(index_persona){
        let personas = this.personas;
        const new_data = personas.filter((item) => parseInt(item.index) != parseInt(index_persona));
        personas = new_data;
        this.kodoti.add(this.NAME_LOCAL, personas);
    }

    calcular_monto_por_plato(indice_persona){
        const local_orden = new LocalOrden();
        let platos_asignados = this.personas[indice_persona].items_asignado;
        let monto = 0;
        for (let item of platos_asignados){
            const precio_unitario = local_orden.orden.find(elemento => elemento.index == item.index).precio_unitario;
            monto = (parseInt(item.cantidad) * parseFloat(precio_unitario)) + monto;
        }
        return monto;
    }

    agruparData2(){
        const cantidades_asignadas = [];
        for(let item of this.personas){
            for(let item2 of item.items_asignado){
                cantidades_asignadas.push(item2);        
            }
        }
    }

    agruparData(){
        const cantidades_asignadas = [];
        for(let item of this.personas){
            for(let item2 of item.items_asignado){
                cantidades_asignadas.push(item2);        
            }
        }
        
        const data_agrupada = cantidades_asignadas.reduce((acum, item) => {
            return !acum[item.index] 
            ? {...acum, [item.index]: item.cantidad} 
            : { ...acum, [item.index]: parseInt(acum[item.index]) + parseInt(item.cantidad) }     
            }, {})
        
        let data_formateada = [];
        Object.entries(data_agrupada).forEach(([key, value]) => {
            const item = {index: key, cantidad: value}
            data_formateada.push(item);
        });

        return data_formateada;
    }

    transformarData(array_orden){
        let data_transformada = [];
        const data_agrupada = this.agruparData();
  
        for (const item of array_orden){
            if (data_agrupada.find( data => data.index == item.index) != undefined){
                const cantidad_agrupada = data_agrupada.find( data => data.index == item.index).cantidad;
                const cantidad_max = parseInt(item.cantidad) - parseInt(cantidad_agrupada);  
                let item_transformado = {index: item.index, categoria: item.categoria, cantidad: cantidad_max, nombre: item.nombre}
                data_transformada.push(item_transformado);
            } else {
                let item_transformado = {index: item.index, categoria: item.categoria, cantidad: item.cantidad, nombre: item.nombre}
                data_transformada.push(item_transformado);
            }
        }
        return data_transformada;
    }

    existLocalStorage(){
        if(this.personas == undefined || this.personas == null){
            return false;
        }
        return true;
    }

    ultimo_index(){
        let personas = this.personas;
        let indexes = [];

        if(personas.length == 0){
            return 0;
        }

        for (let item of personas){
            indexes.push(item.index);
        }

        return parseInt(Math.max(...indexes));
    }

}