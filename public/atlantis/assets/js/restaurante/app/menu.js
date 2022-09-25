$('.btn-agregar-producto-orden').click(function (){
   console.log('Dio click');
   const id = this.dataset.idproducto;
   $.ajax({
      url: 'http://localhost/restaurante/getInfoProducto',
      data: { id: id },
      type: 'POST',
      dataType: 'json',
      success: function (data) {
         console.log(data.index);
         local_orden.agregar(data);
         cargarQuickSideBar();
      }
   });
   show_alert('success','Agregado')
});