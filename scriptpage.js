document.getElementById("home").onclick=function(){
    alert("hello");
};

document.getElementById("login").onclick=function()
{
    var em=document.getElementById("email").value;
    var pas=document.getElementById("password").value;

    if(em==''||pas=='')
    {
        alert('Please enter your email and password..');
    }
    else {
        var message = "Welcome Mr/Miss" + " " + em + " " + "we will keep your information secure";
        alert(message);
        var mess=document.getElementById("comp").innerText;
        alert(mess);

    }

};

