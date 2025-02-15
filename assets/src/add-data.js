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
        title.placeholder = "Titulo";
        
        let description = document.createElement('input');
        description.name = "warn-description";
        description.id = "warn-description";
        description.placeholder = "Descricao";

        divTest.appendChild(title);
        divTest.appendChild(description);

    } else if(option == "posts") {
        divTest.innerHTML = "";

        let subject = document.createElement('input');
        subject.name = "post-description";
        subject.id = "post-description";
        subject.placeholder = "Assunto";

        let description = document.createElement('input');
        description.name = "post-description";
        description.id = "post-description";
        description.placeholder = "Descricao";
        
        divTest.appendChild(subject);
        divTest.appendChild(description);
        
    } else {
        divTest.innerHTML = "";

        let enterpriseName = document.createElement("input");
        enterpriseName.name = "enterprise-name";
        enterpriseName.id = "enterprise-name";
        enterpriseName.placeholder = "Nome da Empresa";

        let job = document.createElement("input");
        job.name = "job";
        job.id = "job";
        job.placeholder = "Cargo";

        let description = document.createElement("input");
        description.name = "vacancy-description";
        description.id = "vacancy-description";
        description.placeholder = "Descricao";

        let address = document.createElement("input");
        address.name = "vacancy-address";
        address.id = "vacancy-address";
        address.placeholder = "Endereco";

        let link = document.createElement("input");
        link.name = "vacancy-link";
        link.id = "vacancy-link";
        link.placeholder = "Link";

        let phoneNumber = document.createElement("input");
        phoneNumber.name = "vacancy-phone-number";
        phoneNumber.id = "vacancy-phone-number";
        phoneNumber.placeholder = "Telefone";

        divTest.appendChild(enterpriseName);
        divTest.appendChild(job);
        divTest.appendChild(description);
        divTest.appendChild(address);
        divTest.appendChild(link);
        divTest.appendChild(phoneNumber);
    }
});
