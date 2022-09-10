$('.btn-agregar-producto-orden').click(function (){
   const id = this.dataset.idproducto;
   $.ajax({
      url: 'http://localhost/restaurante/getInfoProducto',
      data: { id: id },
      type: 'POST',
      dataType: 'json',
      success: function (data) {
         //console.log(data.index);
         local_orden.agregar(data);
      }
   });
});