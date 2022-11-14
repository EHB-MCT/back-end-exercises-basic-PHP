(function (){
    //Small script to hide the divs and show the correct exercise
    document.querySelectorAll('div').forEach((element) => {
        element.style.display = "none";
    });
    document.querySelector('#list').addEventListener("change", function(e){
        let nr = document.querySelector('#list').value;
        document.querySelectorAll('div').forEach((element) => {
            element.style.display = "none";
        });
        console.log('#ex' + nr);
        document.querySelector('#ex' + nr).style.display = "block";
    });
    document.querySelector('#ex1').style.display = "block";
})();
