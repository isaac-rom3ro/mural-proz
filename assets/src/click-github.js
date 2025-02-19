
const mainButtonGit = document.getElementById("mainButton-github");
mainButtonGit.addEventListener('click', openGit);

function openGit (){

    const createPost = document.getElementById('createPost');
    createPost.classList.add('hidden');

    const window = document.getElementById('windowContent');
    window.classList.remove('hidden');
    
    const btn = document.getElementById('mainButton');
    btn.classList.add('hidden');

    const btnGit = document.getElementById('mainButton-github');
    btnGit.classList.add('hidden');
    
    const gitPost = document.createElement("div");
    gitPost.className = "git-post big-post";
    
    const headergit = document.createElement("div");
    headergit.className = "header-git";

    const p = document.createElement("p");
    p.textContent = "GitHub dos criadores do site:"; 
    

    const gitLogo = document.createElement("img");
    gitLogo.src = "../assets/images/github-logo.png";
    gitLogo.className = "logo-git-post";

    //foto e link para o primeiro dev
    const devcredit1 = document.createElement("div");
    devcredit1.className = "devscredits";

    const devpic1 = document.createElement("img");
    devpic1.src ="https://avatars.githubusercontent.com/u/143614775?s=96&v=4";
    devpic1.className = "pics-devs";

    const devlink1 = document.createElement("a");
    devlink1.textContent = "Ramon-Vitor";
    devlink1.href ="https://github.com/Ramon-Vitor";
    devlink1.target = "_blank";

    //foto e link para o segundo dev
    const devcredit2 = document.createElement("div");
    devcredit2.className = "devscredits";

    const devpic2 = document.createElement("img");
    devpic2.src ="https://avatars.githubusercontent.com/u/197427031?v=4";
    devpic2.className = "pics-devs";

    const devlink2 = document.createElement("a");
    devlink2.textContent = "Is4ac-Romero";
    devlink2.href ="https://github.com/is4ac-romero";
    devlink2.target = "_blank";

    //foto e link para o terceiro dev
    const devcredit3 = document.createElement("div");
    devcredit3.className = "devscredits";

    const devpic3 = document.createElement("img");
    devpic3.src ="https://avatars.githubusercontent.com/u/168739572?v=4";
    devpic3.className = "pics-devs";

    const devlink3 = document.createElement("a");
    devlink3.textContent = "DesenvolvedorCarlos";
    devlink3.href ="https://github.com/DesenvolvedorCarlos";
    devlink3.target = "_blank";

    //create a button X with function to close the opened content 
    const exitbtn = document.createElement("div");
    exitbtn.textContent ="X"
    exitbtn.classList.add ('exit')
    exitbtn.id = 'exit'

    window.append(gitPost);
    gitPost.appendChild(headergit);
    gitPost.appendChild(exitbtn);
    headergit.appendChild(gitLogo);
    headergit.appendChild(p);

    gitPost.appendChild(devcredit1);
    devcredit1.appendChild(devpic1);
    devcredit1.appendChild(devlink1);

    gitPost.appendChild(devcredit2);
    devcredit2.appendChild(devpic2);
    devcredit2.appendChild(devlink2);

    gitPost.appendChild(devcredit3);
    devcredit3.appendChild(devpic3);
    devcredit3.appendChild(devlink3);

    //add an animation
    gitPost.classList.add ('animation');

    window.addEventListener('click', (event) =>{
        if(event.target.id == 'exit' || event.target.id == 'windowContent'){
            window.classList.add("hidden");
            btnGit.classList.remove('hidden');
            btn.classList.remove('hidden');
            gitPost.remove();
        };
    });
};