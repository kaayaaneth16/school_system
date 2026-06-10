document.querySelector("form").addEventListener("submit", function(e){

    let username = document.querySelector("[name='username']").value;
    let password = document.querySelector("[name='password']").value;

    if(username === "" || password === ""){
        alert("Jaza taarifa zote");
        e.preventDefault();
    }
});