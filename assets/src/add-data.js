//Show different inputs as the user clicks on different options
const selectOption = document.getElementById("select-option").addEventListener("change", function() {
    let option = document.getElementById("select-option").value; //get the value from the input
    const divTest = document.getElementById("inside-post-content"); //get the local where the inputs is gonna be added

    //check each option and add their associated columns from the database
    if(option == "mural_warnings") {
        divTest.innerHTML = "";

        let title = document.createElement('input');
        title.name = "warn-title";
        title.id = "warn-title";
        title.className = "warn-title";
        title.placeholder = "Titulo";
        
        let description = document.createElement('textarea');
        description.cols = "0";
        description.rows = "14";
        description.maxLength = "896"
        description.name = "warn-description";
        description.id = "warn-description";
        description.className = "warn-description";
        description.placeholder = "Descrição";

        divTest.appendChild(title);
        divTest.appendChild(description);

    } else if(option == "posts") {
        divTest.innerHTML = "";

        let subject = document.createElement('input');
        subject.name = "post-description";
        subject.id = "post-description";
        subject.className = "post-subject";
        subject.placeholder = "Assunto";

        let description = document.createElement('textarea');
        description.cols = "0";
        description.rows = "14";
        description.maxLength = "896"
        description.name = "post-description";
        description.id = "post-description";
        description.className = "post-description";
        description.placeholder = "Descrição";
        
        divTest.appendChild(subject);
        divTest.appendChild(description);
        
    } else {
        divTest.innerHTML = "";

        let enterpriseName = document.createElement("input");
        enterpriseName.name = "enterprise-name";
        enterpriseName.id = "enterprise-name";
        enterpriseName.className = "enterprise-name";
        enterpriseName.placeholder = "Nome da Empresa";

        let job = document.createElement("input");
        job.name = "job";
        job.id = "job";
        job.className = "job";
        job.placeholder = "Cargo";

        let description = document.createElement("textarea");
        description.cols = "0";
        description.rows = "11";
        description.maxLength = "704"
        description.name = "vacancy-description";
        description.id = "vacancy-description";
        description.className = "vacancy-description";
        description.placeholder = "Descrição";

        let address = document.createElement("input");
        address.name = "vacancy-address";
        address.id = "vacancy-address";
        address.className = "vacancy-address";
        address.placeholder = "Endereço";

        let link = document.createElement("input");
        link.name = "vacancy-link";
        link.id = "vacancy-link";
        link.className = "vacancy-link";
        link.placeholder = "Link";

        let phoneNumber = document.createElement("input");
        phoneNumber.name = "vacancy-phone-number";
        phoneNumber.id = "vacancy-phone-number";
        phoneNumber.className = "vacancy-phone-number";
        phoneNumber.placeholder = "Telefone (00) 0 0000-0000";

        divTest.appendChild(enterpriseName);
        divTest.appendChild(job);
        divTest.appendChild(description);
        divTest.appendChild(address);
        divTest.appendChild(link);
        divTest.appendChild(phoneNumber);
    }
});