//add an event to the button add content
const mainButton = document.getElementById("mainButton");
mainButton.addEventListener('click', openWindow);

function openWindow (){
    //same logic as show content
    //hide what it needs and show what it needs
    const createPost = document.getElementById('createPost');
    createPost.classList.remove('hidden');

    const window = document.getElementById('windowContent');
    window.classList.remove('hidden');
    
    const btn = document.getElementById('mainButton');
    btn.classList.add('hidden');
    
    //add an animation
    createPost.classList.add ('animation');

    //same idea as before, just does the contrary, hide everything and show the main content
    window.addEventListener('click', (event) =>{
        if(event.target.id == 'exit' || event.target.id == 'windowContent'){
            window.classList.add("hidden");
            btn.classList.remove('hidden');
            createPost.classList.remove ('animation');
        };
    });
};