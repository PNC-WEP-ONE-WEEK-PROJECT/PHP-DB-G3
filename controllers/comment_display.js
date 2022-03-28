// ------ GET ELEMENT BUTTON----------
let btn_cmm = document.querySelectorAll(".btn_cmm");
let show_cmm = document.querySelectorAll(".show_comment");
let btn_like = document.querySelectorAll(".btn_like");
let btn_send = document.querySelectorAll(".btn_send");
let btn_add_fri = document.querySelectorAll(".add_freind");

// CHECK IF BUTTON COMMENT HAS CLICKED-----------------
function shows_cmm (event) {
    for (let i=0; i<btn_cmm.length; i++){
        btn_cmm[i].addEventListener("click",function() {
            show_cmm[i].style.display="block";
            btn_cmm[i].style.color="blue";
        })
        
    }
}

// CHECK IF BUTTON COMMENT HAS CLICKED----------------------------------------------------------------

function shows_send (event) {
    for (let i=0; i<btn_send.length; i++){
        btn_send[i].addEventListener("click",function() {
            show_cmm[i].style.display="block";
            btn_send[i].style.color="blue";
        })
        
    }
}
shows_send();

// CHECK IF BUTTON COMMETN HAS CLICED TO TRUN OFF COMMENT
function hide_cmm (event) {
    for (let i=0; i<btn_cmm.length; i++){
        btn_cmm[i].addEventListener("click",function() {
            btn_cmm[i].style.color="black";
            show_cmm[i].style.display="none";
        })
        
    }
}

function color(event) {

    
}

// ----------  CHECK IF BUTTON LIKE CLICKED--------
function checkbtnLike (event) {
    for (let i=0; i<btn_like.length; i++){
            // CHANGE COLOR TO RED

            btn_like[i].addEventListener("click",function() {
                btn_like[i].style.color="red";
            })
        }
}

// ---CHECK IF BUTTON LIKE HAS CLICK AGAIN TO UNLIKE
function check_btn_Unlike() {
    for (let i=0; i<btn_like.length; i++){

     // CHANGE COLOR TO DEFAULT
     btn_like[i].addEventListener("click",function() {
        btn_like[i].style.color="black";
    })
    }
}

// FUCNTION FOR CONTROL LIKE AND UNLIKE
let count_click_like = 0;
let count_click_cmm = 0;
function control_both_likeUnlike() {
    if (count_click_like % 2== 0){
        checkbtnLike();
    }
    else{
        check_btn_Unlike();
    }
    count_click_like += 1;
}

// ------FUNCTION FOR CONTROL SHOW COMMENT AHD HIDE COMMENT
function control_see_unsee_cmm() {
    if (count_click_cmm % 2==0){
        shows_cmm();
    }
    else{
        hide_cmm();
    }
    count_click_cmm+=1;
}


let user_friend = document.getElementById("user_friend");
function showcolor(){
    user_friend.style.color = "white"
    console.log('helo');
}
user_friend.addEventListener("click",showcolor);
