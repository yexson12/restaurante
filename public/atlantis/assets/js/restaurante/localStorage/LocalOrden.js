class LocalOrden {
    
    constructor(){
        this.kodoti = new KodotiLocalCache('kodoti');
        this.NAME_LOCAL = 'orden';
        if(!this.existLocalStorage()){
            this.kodoti.add(this.NAME_LOCAL, [], { type: KodotiLocalCache.TIMETYPE.HOURS, value: 24 });
        }
    }

    get orden(){
        return this.kodoti.get(this.NAME_LOCAL);
    }

    get_by_index(index){
        for(let item of this.orden){
            if(item['index'] == index){
                return item;
            }
        }
        return [];
    }

    agregar(array){
        let orden = this.orden;
        let orden_by_index = this.get_by_index(array.index);
        //alert("llego agregar")
        console.log('llego agregar');
        console.log(orden_by_index.lenght );
        if (orden_by_index.length == 0 ){
            console.log('nuevo')
            orden.push(array);
            this.kodoti.add(this.NAME_LOCAL, orden, { type: KodotiLocalCache.TIMETYPE.HOURS, value: 24 });
        } else {
            console.log('actualizd')
            orden_by_index.cantidad = parseInt(orden_by_index.cantidad) + parseInt(array.cantidad);
            orden_by_index.precio_total = parseFloat(orden_by_index.precio_unitario) * parseInt(orden_by_index.cantidad);
            let indice_item = orden.findIndex((elemento) => elemento.index == array.index);
            orden[indice_item] = orden_by_index;
            this.kodoti.add(this.NAME_LOCAL, orden, { type: KodotiLocalCache.TIMETYPE.HOURS, value: 24 });
        }
    }

    actualizar(array){
        let orden = this.orden;
        for (let i = 0; i < orden.length; i++) {
            if(orden[i]['index'] == array['index']){
                orden[i] = array;
                break;
            }
        }
        this.kodoti.delete(this.NAME_LOCAL);
        this.kodoti.add(this.NAME_LOCAL, orden, { type: KodotiLocalCache.TIMETYPE.HOURS, value: 24 });
    }

    // actualizar(index, data){
    //     let orden = this.orden;
    //     let item_orden = this.get_by_index(index);
    //     for (let i = 0; i < orden.length; i++) {
    //         if(orden[i]['index'] == index){
    //             item_orden[data.campo] = data.valor;
    //             orden[i] = item_orden; 
    //             break;
    //         }
    //     }

    //     this.kodoti.delete(this.NAME_LOCAL);
    //     this.kodoti.add(this.NAME_LOCAL, orden);
    // }

    delete(index){
        let orden = this.orden;
        for (let i = 0; i < orden.length; i++) {
            if(orden[i]['index'] == index){
                orden.splice(i,1);
                break;
            }
        }
        this.kodoti.delete(this.NAME_LOCAL);
        this.kodoti.add(this.NAME_LOCAL, orden, { type: KodotiLocalCache.TIMETYPE.HOURS, value: 24 });
    }

    calcularCuentaTotal(){
        let total = 0;
        for(let item of this.orden){
            total = parseFloat(item.precio_total) + total;
        }
        return total;
    }

    existLocalStorage(){
        if(this.orden == undefined || this.orden == null){
            return false;
        }
        return true;
    }

    // indexarArray(array){
        
    //     const indexes = [];
    //     console.log(typeof this.orden)
    //     console.log(this.orden)
    //     for(let index of this.orden){
    //         indexes.push(index);
    //     }
    //     let ultimo_indice = Math.max(indexes);
    //     array['index'] = ultimo_indice + 1;
    //     return array;
    // }

}