window.onload = function(){

    var checkBox1 = document.getElementById("inlineCheckbox1");
    var checkBox2 = document.getElementById("inlineCheckbox2");
    var checkBox3 = document.getElementById("inlineCheckbox3");
    var checkBox4 = document.getElementById("inlineCheckbox4");
    var checkBox5 = document.getElementById("inlineCheckbox5");

    var tempBox = ["#inlineCheckbox1", "#inlineCheckbox2", "#inlineCheckbox3", "#inlineCheckbox4", "#inlineCheckbox5"];

    var temp = 0;

    for(var i = 0; i < tempBox; i++){
        if(tempBox[i].checked){
            temp++;
        }
    }

    if(temp < 2){
        alert("A minimum of 2 check boxes must be selected");
    }

}

    
    
    