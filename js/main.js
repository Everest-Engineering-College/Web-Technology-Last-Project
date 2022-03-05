console.log("hello");

if(document.getElementById("log") != null){
    var logStatus=document.getElementById("log").innerHTML;
}

const open = document.getElementById('open');
const modal_container = document.getElementById('modal_containerr');
const close = document.getElementById('close');



// if(logStatus=="truee")
// {  close.addEventListener('click', () =>{
//     modal_container.classList.remove('show');
    
//     document.getElementById("open").href = "download.php";
// });
// }
// else{
//     document.getElementById("open").href = "#";
    
// }
 close.addEventListener('click', () =>{
        modal_container.classList.remove('show');
        
});
open.addEventListener('click', () =>
{
   
        modal_container.classList.add('show');
    // window.stop();
}); 
// console.log(logStatus);
// if(logStatus=="falsee")
// {
   
// }
// else if (logStatus == "truee")
// {
//     document.getElementById("open").href = "download.php";
// }

