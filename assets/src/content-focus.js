const clickedPost = document.querySelectorAll('.post'); //catch each post

clickedPost.forEach(post => { //for each post was added a function on click
    post.addEventListener('click', function(event) { //event is passing the properties about the clicked element
        //if the first class of the element is post and it has a second class
        //gambiarra to resolve a bug with transparency background it works :)
        if(event.target.classList[0] == "post" && event.target.classList[1]) {
            //remove the display none from a hidden div
            const window = document.getElementById('windowContent');
            window.classList.remove('hidden');
    
            //hidden the add content
            const createPost = document.getElementById('createPost');
            createPost.classList.add('hidden');
    
            //hidden the button of adding posts (UX) 
            const btn = document.getElementById('mainButton');
            btn.classList.add('hidden');
        
            //create a div and add properties
            const focusPost = document.createElement("div");
            focusPost.textContent = "Isso é um postite aberto";
            focusPost.classList.add('big-post');
            focusPost.classList.add('animation');
            focusPost.classList.add(event.target.classList[1]);
            focusPost.id = 'bigPost';
            
            //create a button X with function to close the opened content 
            const exitbtn = document.createElement("div");
            exitbtn.textContent ="X"
            exitbtn.classList.add ('exit')
            exitbtn.id = 'exit'
            
            //add both
            window.append(focusPost);
            focusPost.append(exitbtn);
    
            //this event is gonna make the contraty to the beginning of the code
            //just hide everything and display the main content again 
            window.addEventListener('click', (event) =>{
                if(event.target.id == 'exit' || event.target.id == 'windowContent'){
                    window.classList.add("hidden");
                    btn.classList.remove('hidden');
                    focusPost.remove();
                };
            });       
        }
    })
});
