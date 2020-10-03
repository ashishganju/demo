// function validateEmail(emailField){



//     var reg =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

//     if (reg.test(emailField.value) == false) 
//     {
//         alert('Invalid Email Address');
//         return true ;
//     }

//     return true;

// }

function myfun()
{
    var a= document.myform.email.value;
    if(a.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/))
{
    document.getElementById("message").innerHTML="Invalid Email";
}
}

