// let btn = document.querySelectorAll('#showPass');
// let x = document.getElementById('passInput')
// x.type = "password"
// btn.onclick = ()=>{
// if (x.type === "password") {
//   x.type = "text";
//   btn.classList.remove('fa-eye-slash')
//   btn.classList.add("fa-eye")
// } else {
//   x.type = "password";
//   btn.classList.add('fa-eye-slash')
//   btn.classList.remove("fa-eye")
// }
// }
let navs = document.querySelector('.navbar-nav')
let menuIcon = document.querySelectorAll('.menu-toggle')
console.log(navs, menuIcon);
menuIcon.forEach(function(e) {
    e.addEventListener('click', function() {
        navs.classList.toggle('active');
    });
});


let shouldExecuteCode = true;
if (shouldExecuteCode) {
    const passFields = document.querySelectorAll('.pass-field')
    const passBtn = document.querySelectorAll('.show-pass')
    console.log(passBtn);
    console.log(passBtn);
    passBtn.forEach((btn, index) => {
        passFields[index].type = 'password'
        btn.addEventListener('click', function (e) {
            // alert('hellow')
            e.preventDefault();
            if (passFields[index].type === 'password') {
                passFields[index].type = 'text'
                btn.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passFields[index].type = 'password'
                btn.classList.replace('fa-eye-slash', 'fa-eye');
            }
        })
    })
}



const step1 = document.querySelector('.step-1');
const step2 = document.querySelector('.step-2');
const step3 = document.querySelector('.step-3');
const next1 = document.querySelector('#next-1');
const next2 = document.querySelector('#next-2');
const next3 = document.querySelector('#next-3');
const prev1 = document.querySelector('#prev-1');
const prev2 = document.querySelector('#prev-2');
const progressBar = document.querySelectorAll('.indicators');
let currentStep = 0;
progressBar[currentStep].classList.add('active');
const nextBtnFunc = (next, steps, steps2) => {
    next.onclick = function () {
        steps.style.left = '-76rem';
        steps2.style.left = '0';
        currentStep++;
        progressBar[currentStep].classList.add('active');
    }
}
nextBtnFunc(next1, step1, step2);
nextBtnFunc(next2, step2, step3);

const prevBtnFunc = (prev, steps, steps2) => {
    prev.onclick = function () {
        steps.style.left = '0';
        steps2.style.left = '76rem';
        progressBar[currentStep].classList.remove('active');
        currentStep--;
        progressBar[currentStep].classList.add('active');
    }
}
prevBtnFunc(prev1, step1, step2);
prevBtnFunc(prev2, step2, step3);
const form = document.querySelector('#step-form');
form.addEventListener('click', (e) => {
    e.preventDefault();
});


