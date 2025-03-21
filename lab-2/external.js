let cnt = false;
function changeText(){
    // Add your code here to change the text to "you clicked and changed the message" when the button is clicked.
    if(!cnt){
        document.getElementById('message').innerHTML = "you clicked and changed the message";
        cnt =true;

    }
    else{
        document.getElementById('message').innerHTML = "Click the button to change this text.";
        cnt=false;
}

}