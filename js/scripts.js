function switchSide(){

    if (localStorage.getItem('side') === 'light'){
        document.body.style.backgroundColor = "#f0f0f2";
        document.getElementById('side_menu').style.color = "#000000";
	document.getElementById('or').style.color = "#000000";
    }
    else if(localStorage.getItem('side') === 'dark'){
        document.body.style.backgroundColor = "#3a3a3a";
        document.getElementById('side_menu').style.color = "#f0f0f2";
	document.getElementById('or').style.color = "#ffffff";
    }
}


function lightSide() {
    localStorage.setItem('side', 'light');
    switchSide();
}


function darkSide(){
    localStorage.setItem('side', 'dark');
    switchSide();
}



function openNav() {
    document.getElementById("mySidenav").style.width = "180px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
