class LocalOrdenAsignado {

    constructor(){
        this.kodoti = new KodotiLocalCache('kodoti');
        this.NAME_LOCAL = 'ordenAsignado';
        if(!this.existLocalStorage()){
            this.kodoti.add(this.NAME_LOCAL, [], { type: KodotiLocalCache.TIMETYPE.HOURS, value: 24 });
        }
    }

    get ordenAsignado(){
        return this.kodoti.get(this.NAME_LOCAL);
    }

    get_by_index(index){
        let data = []
        for(let item of this.ordenAsignado){
            if(item.index == index){
                data.push(item);
            }
        }
        return data;
    }

    guardar(index_persona, index_item, cantidad){
        let ordenAsignado = this.ordenAsignado();
        const indice_persona = ordenAsignado.findIndex((elemento, indice) => { elemento.index_persona == index_persona ? true : false });
    }

    agregar2(index_person, index_item, cantidad){

    }

    actualizar(index_person, index_item, cantidad){

    }

    agregar(array){
        this.kodoti.add(this.NAME_LOCAL, this.ordenAsignado.concat(array), { type: KodotiLocalCache.TIMETYPE.HOURS, value: 24 });
    }

    agruparDataPorPersona(index_persona = 0){
        const cantidades_asignadas = [];
        for(let item of this.ordenAsignado){
            const cantidad_asignada = {index_persona: item.people_index, item_asignado: item.item_asignado, cantidad: parseInt(item.cantidad)};
            cantidades_asignadas.push(cantidad_asignada);         
        }
        const data_agrupada = cantidades_asignadas.reduce((acum, item) => {
            return !acum[item.index_persona] 
            ? {...acum, index_persona: [item.index_persona], item_asignado: [item.index_asignado], cantidad: item.cantidad} 
            : { ...acum, index_persona: [item.index_persona], item_asignado: [item.index_asignado], cantidad: [item.cantidad] + item.cantidad }
            }, {})
        
        // let data_formateada = [];
        // Object.entries(data_agrupada).forEach(([key, value]) => {
        //     const item = {index: key, cantidad: value}
        //     data_formateada.push(item);
        // });

        return data_agrupada;
    }


    agruparData(){
        const cantidades_asignadas = [];
        for(let item of this.ordenAsignado){
            const cantidad_asignada = {index: item.item_asignado, cantidad: parseInt(item.cantidad)};
            cantidades_asignadas.push(cantidad_asignada);         
        }
        const data_agrupada = cantidades_asignadas.reduce((acum, item) => {
            return !acum[item.index] 
            ? {...acum, [item.index]: item.cantidad} 
            : { ...acum, [item.index]: acum[item.index] + item.cantidad }     
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
                let item_transformado = {index: item.index, categoria: item.categoria, cantidad_max: cantidad_max, nombre: item.nombre}
                data_transformada.push(item_transformado);
            } else {
                let item_transformado = {index: item.index, categoria: item.categoria, cantidad_max: item.cantidad, nombre: item.nombre}
                data_transformada.push(item_transformado);
            }
        }
        return data_transformada;
    }

    // copiarDatos(array){
    //     if(array.length == 0){
    //         this.kodoti.add(this.NAME_LOCAL, []);
    //         return;
    //     }
    //     const data_copy = [];
    //     for(let item_orden of array){
    //         let item_copy = {
    //             "index": item_orden.index,
    //             "categoria": item_orden.categoria,
    //             "nombre": item_orden.nombre,
    //             "cantidad_max": item_orden.cantidad,
    //             "cantidad_asignada": 0
    //         }
    //         data_copy.push(item_copy);
    //     }
    //     this.kodoti.add(this.NAME_LOCAL, data_copy);
    // }

    // actualizar(array){
    //     let ordenAsignado = this.ordenAsignado;
    //     for (let i = 0; i < ordenAsignado.length; i++) {
    //         if(ordenAsignado[i]['index'] == array['index']){
    //             ordenAsignado[i] = array;
    //             break;
    //         }
    //     }
    //     this.kodoti.delete(this.NAME_LOCAL);
    //     this.kodoti.add(this.NAME_LOCAL, ordenAsignado);
    // }

    existLocalStorage(){
        if(this.ordenAsignado == undefined || this.ordenAsignado == null){
            return false;
        }
        return true;
    }


}