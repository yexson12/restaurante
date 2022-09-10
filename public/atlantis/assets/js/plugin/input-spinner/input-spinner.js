//const myInput = document.getElementById("my-input");

function stepper(btn, element){
    
    // let myInput = document.getElementById(element);
    // let id = btn.getAttribute("id");
    // let min = myInput.getAttribute("min");
    // let max = myInput.getAttribute("max");
    // let step = myInput.getAttribute("step");
    // let val = myInput.getAttribute("value");
    // let calcStep = (id == "increment") ? (step*1) : (step * -1);
    // let newValue = parseInt(val) + calcStep;
    
    let id = btn.attr('id');
    let min = $('#' + element).attr('min');
    let max = $('#' + element).attr('max');
    let step = $('#' + element).attr('step');
    let val = $('#' + element).val();
    let calcStep = (id == "increment") ? (step*1) : (step * -1);
    let newValue = parseInt(val) + calcStep;

    if(newValue >= min && newValue <= max){
        $('#' + element).val(newValue);
    }
}