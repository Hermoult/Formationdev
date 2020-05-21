var keys = Array.from(document.querySelectorAll('.key'));


function playSound(e)
{
    var audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
    var key = document.querySelector(`div[data-key="${e.keyCode}"]`);
    if(audio == false){return;}

    key.classList.add('playing');
    audio.currentTime=0;
    audio.play();


}

function removeTransition(e)
{
    e.target.classList.remove('playing');
}

keys.forEach(key => key.addEventListener('transitionend',removeTransition));

window.addEventListener('keydown',playSound);