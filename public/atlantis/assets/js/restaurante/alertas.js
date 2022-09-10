function show_alert(icon, title){
    return Swal.fire({
        position: 'center',
        icon: icon,
        title: title,
        showConfirmButton: false,
        timer: 1500
    }) 
}

function show_alert_timer(){
    return Swal.fire({
        title: 'Añadiendo...!',
        timer: 400,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
        },
        allowOutsideClick: false
    })
}

function show_alert_confirm(title, text, icon){
    let estado = Swal.fire({
        title: title,
        text: text,
        icon: icon,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si'
      }).then((result) => {
        if (result.isConfirmed) {
            return true;
        } else if(result.dismiss === Swal.DismissReason.cancel){
            return false;
        }
      });
    return estado; 
}