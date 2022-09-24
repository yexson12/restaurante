const local_orden = new LocalOrden();
const local_persona = new LocalPersona();
const local_ordenAsignado = new LocalOrdenAsignado();

$(document).ready(function(){
    cargarQuickSideBar();
});

//funcion auxiliar
function cargarJsonOrden(){
    const orden_json = (function() {
        var json = null;
        $.ajax({
            'async': false,
            'global': false,
            'url': "http://localhost/restaurante/public/atlantis/assets/js/json/orden.json",
            'dataType': "json",
            'success': function (data) {
                json = data;
            }
        });
        return json;
    })();

    local_orden.agregar(orden_json);
}

function cargarQuickSideBar(){
    printOrden();
    printMontoTotal();
    adjuntarEventosQsb();
}

/*-----Orden */
function printOrden(){
    $('#quicksidebar-container-item').empty();
    for(let item of local_orden.orden ){
        $('#quicksidebar-container-item').append(itemQuickSideBar(item.categoria, item.nombre, item.cantidad, item.precio_total, item.index));  
    }
}
function itemQuickSideBar(categoria, nombre, cantidad, precio_total, index){
    return `<div class="user row-sm-6 row-lg-3 mr-2">
                <div class="card  mb-2">
                    <a data-quicksidebaritem="${index}" href="#" class="d-flex flex-column quicksidebar-item">
                        <div class="user-data d-flex flex-row justify-content-between align-items-center col-12 m-0 mb-2 pb-1 pl-1 pr-1"
                            style="border-bottom: 1px solid #f1f1f1;">
                            <span class="name text-muted text-center m-0">${categoria}</span>
                            <button data-quicksidebaritem="${index}" class="cerrar-orden quicksidebar-item-delete col-1 p-0 btn btn-light ">
                                <i class="cerrar-orden fa fa-trash text-danger m-0 p-0 text-center"></i>
                            </button>
                        </div>
                        <div class="d-flex col-12 p-0">
                            <div class="col-12 pr-2 pl-2">
                                <small class="name h5">
                                    <b>${nombre}</b>
                                </small>
                                <div class="mb-1 mt-2 d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <span class="text-muted">
                                            Cantidad: &nbsp;
                                            <b id="qsb-amount" class="qsb-amount">${cantidad}</b>
                                        </span>
                                        <span class="badge badge-black"><b id="qsb-total">${fSoles.format(parseFloat(precio_total))}</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
    `;
}
/*-----Fin Orden */

/*-----Detalles */
function printDetails(index_target){
    const item_orden = getDetails(index_target);
    clearDetails();
    $('#qsb-details-name').text(item_orden['nombre']);
    $('#qsb-details-description').text(item_orden['descripcion']);
    $('#qsb-details-amount').val(item_orden['cantidad']);
    $('#qsb-details-unit').text(fSoles.format(parseFloat(item_orden['precio_unitario'])));
    $('#qsb-details-total').text(fSoles.format(parseFloat(item_orden['precio_total'])));
    $('.messages-wrapper').attr('data-indexitem', index_target);
}

function getDetails(index_target){
    let item_orden = [];
    for(let item of local_orden.orden ){
        if(item.index == index_target){
            item_orden = item;
            break;
        }
    }
    return item_orden;
}

$('.qsb-details-btnminus').click(function(e){
    btn_spinner_action_qsb(this)
    local_persona.update_all_count_product(index_item)
    $('#list-platos-personas').empty();
    cargar_dividir();
    show_lista_personalizada()
    
});
$('.qsb-details-btnplus').click(function(){
    btn_spinner_action_qsb(this)
    show_lista_personalizada()
    actualizar_total_indicadores();
});

function btn_spinner_action_qsb(btn){
    const index_target = getIndexItemSelected();
    stepper($(btn),'qsb-details-amount');
    updateItemOrden(index_item);
    changeDataTemplate();
}

function clearDetails(){
    $('#qsb-details-name').text("");
    $('#qsb-details-description').text("");
    $('#qsb-details-amount').val(1);
    $('#qsb-details-total').text("");
}
/*-----Fin Detalles */

function printMontoTotal(){
    $('#quicksidebar-footer-total').empty();
    $('#quicksidebar-footer-total').text(fSoles.format(local_orden.calcularCuentaTotal()));
}


function changeDataTemplate(){
    let item_orden = local_orden.get_by_index(getIndexItemSelected());
    //Detalles: cantidad y total
    $('#qsb-details-amount').val(item_orden['cantidad']);
    $('#qsb-details-total').text(fSoles.format(parseFloat(item_orden['precio_total'])));
    //Orden: cantidad y total
    const index_item = getIndexItemSelected();
    $(`#quicksidebar-container-item a[data-quicksidebaritem=${index_item}]`).find('#qsb-amount').text(item_orden['cantidad']);
    $(`#quicksidebar-container-item a[data-quicksidebaritem=${index_item}]`).find('#qsb-total').text(fSoles.format(item_orden['precio_total']));
    //Footer: total
    $('#quicksidebar-footer-total').empty();
    $('#quicksidebar-footer-total').text(fSoles.format(local_orden.calcularCuentaTotal()));
    //Page: Cuenta total
    $('#numbers-cuenta-total').empty();
    $('#numbers-cuenta-total').text(fSoles.format(local_orden.calcularCuentaTotal()));

}

function updateItemOrden(index_item){
    const new_amount = $('#qsb-details-amount').val();
    let orden_item = local_orden.get_by_index(index_item);
    orden_item['cantidad'] = new_amount;
    orden_item['precio_total'] = orden_item['precio_unitario'] * new_amount;
    local_orden.actualizar(orden_item, ['cantidad', 'precio_total']);
    //console.log('updateItemOrden: ' + index_item);
    // let ordenAsignado_item = local_ordenAsignado.get_by_index(index_item);
    // ordenAsignado_item['cantidad_max'] = new_amount;
    //local_ordenAsignado.actualizar(ordenAsignado_item);

    // const new_amount = $('#qsb-details-amount').val();
    // const data = {campo: ["cantidad", "precio_total"], valor: [new_amount, new_amount * ]};
    // local_orden.actualizar(index_item, data);
}

function deleteItemOrden(index_producto){
    
    //console.log(personas_process);
    
    local_orden.delete(index_producto);
    local_persona.delete_all_product(index_producto);
    //Page: Cuenta total
    $('#numbers-cuenta-total').empty();
    $('#numbers-cuenta-total').text(fSoles.format(local_orden.calcularCuentaTotal()));
    $('#list-platos-personas').empty();
    cargar_dividir()
    // show_lista_personalizada();
}

function getIndexItemSelected(){
    return index_item = $('.messages-wrapper').attr('data-indexitem');
}

/*-----Eventos */
function adjuntarEventosQsb(){
    event_quicksidebar_details_show();
    event_quicksidebar_details_hidden();
    event_quicksidebar_orden_delete();
}

function event_quicksidebar_details_show(){
    $('.quicksidebar-item').on('click', function(e){
        if(e.target.classList.contains('cerrar-orden')){
            console.log('Agregar funcion de quitar platillo de la orden');
            return;
        }
        printDetails(e.currentTarget.dataset.quicksidebaritem);
        $('.tab-chat').addClass('show-chat');
    });
}

function event_quicksidebar_details_hidden(){
    $('.messages-wrapper .return').on('click', function(){
		$('.tab-chat').removeClass('show-chat');
	});
}

function event_quicksidebar_orden_delete(){
    $('.quicksidebar-item-delete').click(function(){
		deleteItemOrden(this.dataset.quicksidebaritem);
        cargarQuickSideBar();
	});
}
/*-----Fin Eventos */

