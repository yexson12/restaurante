$(document).ready(function(){
    cargar_dividir();
});

function cargar_dividir(){
    mostrarCuentaTotal();
    mostrar_container_personas();
    show_lista_personas();
    show_lista_personalizada();
    agregar_platos_asignados()
    actualizar_total_indicadores();
}

function mostrarCuentaTotal(){
    $('#numbers-cuenta-total').empty();
    $('#numbers-cuenta-total').text(fSoles.format(local_orden.calcularCuentaTotal()));
}

$('#btn-agregar-personas').click(function(){
    const cantidad_personas = $('#txt-personas').val();
    almacenar_personas(cantidad_personas);
    show_alert_timer().then(function(){
        añadir_personas(cantidad_personas)
    });
    mostrar_container_personas();
});

function mostrar_container_personas(){
    if(local_persona.personas.length == 0){
        $('#container-personas').hide();
        $('#container-sinpersonas').show();
    } else {
        $('#container-personas').show();
        $('#container-sinpersonas').hide();
    }
}

function almacenar_personas(cantidad){
    const personas = local_persona.personas ?? 0;
    const monto_total = local_orden.calcularCuentaTotal();
    const mitad = parseFloat(monto_total) / parseInt(personas.length);
    for (let i = 0; i < cantidad; i++) {
        local_persona.agregar_persona();
    }
    local_persona.agregar_monto_personalizado(mitad);
}

function añadir_personas(cantidad){
    const personas = local_persona.personas ?? 0;
    const ultimas_personas = local_persona.get_ultimos_elementos(cantidad);
    const monto_total = local_orden.calcularCuentaTotal();
    const mitad = parseFloat(monto_total) / parseInt(personas.length);
    console.log(mitad);
    for(let item of ultimas_personas){
        $('#list-platos-personas').append(item_lista1_persona(item.index, item.nombre, item.monto_por_items));
        
        $('#items-container-'+item.index).hide();
        $('#btn-editar-' + item.index).hide()
    }
    show_lista_personalizada();
}

function show_lista_personalizada(){
    console.log('show_lista_personazada')
    const personas = local_persona.personas;
    const monto_total = local_orden.calcularCuentaTotal();
    const mitad = parseFloat(monto_total) / parseInt(personas.length);
    $('#list-personalizado-personas').empty();
    for (let item of personas){
        $('#list-personalizado-personas').append(item_lista2_persona(item.nombre, mitad));
    }
}

function show_lista_personas(){
    const personas = local_persona.personas;
    const monto_total = local_orden.calcularCuentaTotal();
    for(let item of personas){
        const indice_persona = personas.findIndex(elemento => elemento.index == item.index);
        $('#list-platos-personas').append(item_lista1_persona(item.index, item.nombre, local_persona.calcular_monto_por_plato(indice_persona)));
        $('#list-personalizado-personas').append(item_lista2_persona(item.nombre, (parseFloat(monto_total) / parseInt(personas.length))));
        if(item.items_asignado.length == 0){
            $('#btn-editar-' + item.index).hide()
        } else {
            $('#btn-editar-' + item.index).show()
        }
    }
    actualizar_total_indicadores()
}

function agregar_platos_asignados(index_persona = 0){
    const orden = local_orden.orden;
    const personas = local_persona.personas;
    if(index_persona == 0){
        //agregar a todas las personas sus items
        for (let item of personas){
            for (let item2 of item.items_asignado){
                const nombre_plato = orden.find(data => data.index == item2.index).nombre;
                const precio_unitario = orden.find(data => data.index == item2.index).precio_unitario;
                $('#items-container-'+item.index).append(item_plato_persona(nombre_plato, item2.cantidad, precio_unitario))
                //$('#items-container-'+item.index).show();
            }
            item.items_asignado.length == 0 ? $('#items-container-'+item.index).hide() : $('#items-container-'+item.index).show()
        }
    }
    if(index_persona != 0){
        //agregar a la persona designada sus items
        const platos_asignados = personas.find(elemento => elemento.index == index_persona).items_asignado;
        const indice_persona = personas.findIndex(elemento => elemento.index == index_persona);
        $('#items-container-'+index_persona).empty();
        for (let item of platos_asignados){
            const nombre_plato = orden.find(data => data.index == item.index).nombre;
            const precio_unitario = orden.find(data => data.index == item.index).precio_unitario;
            $('#items-container-'+index_persona).append(item_plato_persona(nombre_plato, item.cantidad, precio_unitario))
        }
        $('#monto-platos-'+index_persona).text(fSoles.format(local_persona.calcular_monto_por_plato(indice_persona)));
        if (platos_asignados.length == 0){
            $('#items-container-'+index_persona).hide();
            $('#btn-editar-' + index_persona).hide();
        } else {
            $('#items-container-'+index_persona).show();
            $('#btn-editar-' + index_persona).show();
        }   
        
    }
}

function modal_agregar(index_persona){
    const orden = local_persona.transformarData(local_orden.orden);
    $('#modal-agregar-body').empty();
    for(let item of orden){
        $('#modal-agregar-body').append(item_modalAgregar_orden(item.index, item.categoria, item.cantidad, item.nombre));
    }
    event_mdl_agregar_spinner();
    $('#btn-modal-agregar').attr('data-idpersona', index_persona);
    vizualizacion_modal('modal-agregar', true);
}

function modal_editar(index_persona){
    const personas = local_persona.personas;
    const orden = local_orden.orden;
    const indice_persona = personas.findIndex(elemento => elemento.index == index_persona);
    $('#modal-editar-body').empty();
    for (let item of personas[indice_persona].items_asignado){
        const nombre_plato = orden.find(data => data.index == item.index).nombre
        $('#modal-editar-body').append(item_modalEditar_orden(index_persona, item.index, nombre_plato, item.cantidad))
    }

    event_mdl_editar_spinner();
    event_mdl_editar_borrar();
    $('#btn-modal-editar').attr('data-idpersona', index_persona);
    vizualizacion_modal('modal-editar', true);
}

function actualizar_total_indicadores(){
    $('#lbl-faltante').text(fSoles.format(local_persona.calcular_total_faltante()));
    $('#lbl-subtotal').text(fSoles.format(local_persona.calcular_subtotal()));
}

$('#list-platos-personas').on('click', async function(e){
    if($(e.target).attr('data-accion') == undefined){
        return;
    }
    
    const index_persona = $(e.target).attr('data-idpersona');
    const accion = $(e.target).attr('data-accion');

    if( accion == 'agregar'){
        modal_agregar(index_persona);
    }

    if( accion == 'editar'){
        console.log('Editar');
        modal_editar(index_persona);
    }

    if( accion == 'borrar'){
        let estado = await show_alert_confirm('¿Desea quitar a esta persona?', "", 'warning');
        if(estado){
            local_persona.borrar_persona(index_persona);
            $('#list-platos-personas').empty();
            $('#list-personalizado-personas').empty();
            show_lista_personas();
            agregar_platos_asignados();
        } else {
            return;
        }
    }
 
})

$('#btn-modal-agregar').click(function(){
    const array_items = items_seleccionados()
    const index_persona = $('#btn-modal-agregar').attr('data-idpersona');

    if(array_items.length == 0){
        vizualizacion_modal('modal-agregar', false) 
        show_alert('warning', 'Seleccione algunos platos').then(function() {
            vizualizacion_modal('modal-agregar', true);
        });
        return;
    }

    const orden_persona = [];
    for (let i = 0; i < array_items.length; i++) {
        let item = {
            "index": array_items[i],
            "cantidad": parseInt($('#spn-modal-agregar-elemet-'+array_items[i]).val())
        }
        if(parseInt($('#spn-modal-agregar-elemet-'+array_items[i]).val()) == 0){
            continue;
        } else {
            orden_persona.push(item);
        }
    }
    
    local_persona.guardar_platos(index_persona, orden_persona);

    vizualizacion_modal('modal-agregar', false);
    agregar_platos_asignados(index_persona);
    actualizar_total_indicadores()
    show_alert('success', 'Asignado'); 
    //Agregar los items en persona
});

$('#btn-modal-editar').click(function(){
    const personas = local_persona.personas;
    const index_persona = $('#btn-modal-editar').attr('data-idpersona');
    const indice_persona = personas.findIndex(elemento => elemento.index == index_persona); 
    let update_data = [];
    for (let item of personas[indice_persona].items_asignado){
        const cantidad = parseInt($('#spn-modal-editar-elemet-'+item.index).val());
        let data = {index: item.index, cantidad: cantidad}
        update_data.push(data); 
    }
    local_persona.actualizar_cantidad(index_persona, update_data);
    vizualizacion_modal('modal-editar', false);
    agregar_platos_asignados(index_persona);
    actualizar_total_indicadores()
    show_alert('success', 'Actualizado'); 
});

$('#btn-asignados').click(function(){
    const personas = local_persona.personas;
    let datos_agrupados = local_persona.agruparData();
    const orden = local_orden.orden;
    $('#mdl-asignados-container').empty();
    for (let item of datos_agrupados){
        let nombre = orden.find((element) => element.index == item.index).nombre;
        let categoria = orden.find((element) => element.index == item.index).categoria;
        let cantidad = orden.find((element) => element.index == item.index).cantidad;
        $('#mdl-asignados-container').append(item_modalAsignados(item.index, nombre, categoria, cantidad));
    }

    for (let item of datos_agrupados){
        for (let item2 of personas) {
            for (let item3 of item2.items_asignado){
                if (item3.index == item.index) {
                    $('.body-asignados-items-'+item3.index).append(item_modalAsignados_items(item2.nombre, item3.cantidad));
                }
            }
        }
    }
    vizualizacion_modal('modal-asignados', true);
});

$('#btn-limpiar').click(function(){
    local_persona.delete_local();
    $('#list-platos-personas').empty()
    cargar_dividir();
})

function item_lista1_persona(index, nombre, monto){
    return `
        <div class="card lista-item-personas mb-2" style="background: white !important; border-radius: 5px !important;">
            <div class="card-header collapsed d-flex" id="group-persona-${index}" data-toggle="collapse" data-target="#item-persona-${index}" aria-expanded="true" aria-controls="group-persona-${index}" role="button">
                <div class="d-flex align-items-center">
                    <div class="span-icon">
                        <div class="icon-user"></div>
                    </div>
                    <div class="span-title">
                        ${nombre}
                    </div>
                </div>
                <div class="d-flex flex-row-reverse flex-grow-1"><b id="monto-platos-${index}" class="text-success">${fSoles.format(monto)}</b></div>
            </div>
            <div id="item-persona-${index}" class="collapse" aria-labelledby="group-persona-${index}" data-parent="#accordion">
                <hr class="m-0 p-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <button id="btn-agregar-${index}" data-accion="agregar" data-idpersona="${index}" class="btn btn-link pr-1 mt-1 mb-1">
                            <span class="btn-label">
                                <i class="fa fa-plus" data-accion="agregar" data-idpersona="${index}"></i>
                            </span>
                            &nbsp;
                            Agregar
                        </button>
                        <button id="btn-editar-${index}" data-accion="editar" data-idpersona="${index}" class="btn btn-link pl-1 mt-1 mb-1">
                            <span class="btn-label">
                                <i class="fas fa-edit" data-accion="editar" data-idpersona="${index}"></i>
                            </span>
                            &nbsp;
                            Editar
                        </button>
                    </div>
                    <button id="btn-borrar-${index}" data-accion="borrar" data-idpersona="${index}" class="btn btn-link mt-1 mb-1 text-danger">
                        <span class="btn-label">
                            <i class="fa fa-trash text-danger" data-accion="borrar" data-idpersona="${index}"></i>
                        </span>
                        &nbsp;
                        Borrar
                    </button>
                    
                </div>
                <div id="items-container-${index}" class="card-body pb-0 pt-3">
                    
                </div>
            </div>
        </div>
    `;
}

function item_lista2_persona(nombre, monto){
    return `
        <div class="card lista-item-personas mb-2" style="background: white !important; border-radius: 5px !important;">
            <div class="card-header collapsed d-flex" role="button">
                <div class="d-flex align-items-center">
                    <div class="span-icon">
                        <div class="icon-user"></div>
                    </div>
                    <div class="span-title">
                        ${nombre}
                    </div>
                </div>
                <div class="d-flex flex-row-reverse flex-grow-1"><b class="text-success">${fSoles.format(monto)}</b></div>
            </div>
        </div>
    `;
}

function item_plato_persona(nombre, cantidad, precio_unitario){
    return `
        <div class="d-flex">
            <div class="flex-1 pt-1 ml-2">
                <h6 class="fw-bold mb-1">${nombre}</h6>
                <small class="text-muted">Cantidad: ${cantidad}</small>
            </div>
            <div class="d-flex ml-auto align-items-center">
                <h5 class="text-info fw-bold">${fSoles.format(cantidad * precio_unitario)}</h3>
            </div>
        </div>
        <div class="separator-dashed"></div>
    `;
}

function item_modalAgregar_orden(index, categoria, cantidad, nombre){
    return `
        <div class="card lista-item-personas mb-0" style="background: white !important;">     
            <div class="card-header collapsed d-flex justify-content-between p-2">
                <div class="col-1 d-flex justify-content-center pr-1 pl-1">
                    <input name="chkidplato" type="checkbox" value="${index}">
                </div>
                <div class="col-7 d-flex flex-column">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-muted bold m-0 p-0">${categoria}</h6>
                        <span class="badge badge-secondary badge-pill">Max. ${cantidad}</span>
                    </div>
                    <span class="text-secondary bold">${nombre}</span>
                </div>
                <div class="col-4 d-flex flex-column align-items-center">
                    <div class="d-flex align-items-center form-group p-0 mt-1" data-modalagregarspinner="${index}">
                        <button class="button-spinner mdl-agregar-btnminus" id="decrement"> - </button>
                        <input class="input-spinner" id="spn-modal-agregar-elemet-${index}" disabled="" type="number" min="0" max="${cantidad}" step="1" value="0" readonly="">
                        <button class="button-spinner mdl-agregar-btnplus" id="increment"> + </button>
                    </div>
                </div>
            </div>
        </div>
    `;
}

function item_modalEditar_orden(index_persona, index, nombre, cantidad){
    return `
    <div class="d-flex flex-column" ">
        <div class="card lista-item-personas mb-0 d-flex flex-column" style="background: white !important;">
            <div class="d-flex justify-content-between pb-0 pt-3 pl-3 pr-3">
                <span class="text-secondary bold">${nombre}</span>
                <button data-idpersona="${index_persona}" data-indexitem="${index}" type="button" class="mdl-editar-btnborrar btn btn-icon btn-round btn-danger btn-xs">
                    <i class="fa fa-trash" data-accion="borrar"></i>
                </button>                                          
            </div>
            <div class="d-flex align-items-center form-group pt-0 pl-3" data-id="${index}">
                <button class="button-spinner mdl-editar-btnminus" id="decrement"> - </button>
                <input class="input-spinner" id="spn-modal-editar-elemet-${index}" disabled="" type="number" min="1" max="${cantidad}" step="1" value="${cantidad}" readonly="">
                <button class="button-spinner mdl-editar-btnplus" id="increment"> + </button>
            </div>
        </div>
    </div>   
    `;
}

function item_modalAsignados(index_plato, nombre_plato, categoria,cantidad_plato){
    return `
        <div class="card lista-item-personas mb-0" style="background: white !important;">
            <div class="card-header collapsed d-flex" id="group-asignado-${index_plato}" data-toggle="collapse" data-target="#asignadosCollapse-${index_plato}" aria-expanded="true" aria-controls="asignadosCollapse-${index_plato}" role="button">
                <div class="d-flex flex-column">
                    <h6 class="text-muted bold m-0 p-0">${categoria}</h6>
                    <span class="text-secondary bold">${nombre_plato}</span>
                </div>
                <span class="badge badge-secondary badge-pill">Max. ${cantidad_plato}</span>
            </div>
            <div id="asignadosCollapse-${index_plato}" class="collapse" aria-labelledby="group-asignado-${index_plato}" data-parent="#accordion">
                <div class="body-asignados-items-${index_plato} card-body pt-1 pb-1 bg-grey2">
                    
                </div>
            </div>
        </div>
    `;
}

function item_modalAsignados_items(nombre, cantidad){
    return `
        <div class="d-flex">
            <div class="flex-1 pt-1 ml-2">
                <h6 class="fw-bold mb-1">${nombre}</h6>
            </div>
            <div class="d-flex ml-auto align-items-center">
                <small class="text-muted">Cantidad: <b>${cantidad}</b></small>
            </div>
        </div>
    `;
}

function event_mdl_editar_borrar(){
    $('.mdl-editar-btnborrar').click(async function(){
        const index_persona = this.dataset.idpersona;
        const index_plato = this.dataset.indexitem;
        let estado = await show_alert_confirm("¿Desea quitar este producto?", "", "warning");
        if (estado){
            local_persona.borrar_plato(index_persona, index_plato);
            vizualizacion_modal('modal-editar', false);
            agregar_platos_asignados(index_persona);
            actualizar_total_indicadores();
        } else {
            return;
        }
    });
}

function event_mdl_agregar_spinner(){
    $('.mdl-agregar-btnminus').click(function(e){
        const index_item = e.target.parentNode.dataset.modalagregarspinner;
        const input = 'spn-modal-agregar-elemet-';
        btn_spinner_action_mdl(index_item, input, this);
    });
    $('.mdl-agregar-btnplus').click(function(e){
        const index_item = e.target.parentNode.dataset.modalagregarspinner;
        const input = 'spn-modal-agregar-elemet-';
        btn_spinner_action_mdl(index_item, input, this);
    });
}

function event_mdl_editar_spinner(){
    $('.mdl-editar-btnminus').click(function(e){
        const index_item = e.target.parentNode.dataset.id;
        const input = 'spn-modal-editar-elemet-';
        btn_spinner_action_mdl(index_item, input, this);
    });
    $('.mdl-editar-btnplus').click(function(e){
        const index_item = e.target.parentNode.dataset.id;
        const input = 'spn-modal-editar-elemet-';
        btn_spinner_action_mdl(index_item, input, this);
    });
}

function btn_spinner_action_mdl(index_item, input, btn){
    stepper($(btn), input + index_item);
}

function items_seleccionados(){
    const array_items = [];
    for(let value of $('input:checkbox[name=chkidplato]:checked')){
        array_items.push($(value).val());
    }
    return array_items;
}

function vizualizacion_modal(name_modal, vizualizacion){
    const status = vizualizacion ? 'show' : 'hide'; 
    $('#' + name_modal).modal(status);
}
