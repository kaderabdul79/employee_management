let username = document.getElementById('username');
username.addEventListener('blur',function(e){
    let fromInputValue = e.target.value;
    let name = document.getElementById('uname');
    const span = document.createElement('span')
    if(fromInputValue == 'kader'){
        span.innerText = 'valid'
        username.style.border = '2px solid green'
        name.appendChild(span)
    }else{
        username.style.border = '2px solid red'
        span.innerText = 'invalid'
        name.appendChild(span) 
        // span.innerText = ""       
    }
   
})

// let add = document.getElementById('add');
// add.addEventListener('click',function(){
//     let li = document.createElement('li')
//     li.innerText = 'hello'
//     add.appendChild(li)
// })