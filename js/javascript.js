function contactme(){
    var contact = prompt("Reason for contacting? \n Project \n Thesis \n Meet & Greet");
    if(String(contact) === "project"){
        alert("Thank you for contacting with me for a project");
        
        var project = prompt("Project Type : \n Academic  \n Freelance  \n Startup ");
        if (String(project) === "academic"){
            alert("Thank you for chosing Academic project type");
        } else if (String(project) === "freelance"){
            alert("Thank you for chosing Freelance project type");
        } else if(String(project) === "startup"){
            alert("Thank you for chosing Startup project type");
        }
        
        var projecttime = prompt("Project Urgency : \n Urgent (1-2 weeks) \n Medium (1 month) \n Long-term (2+ months)");
        if (String(projecttime) === "urgent"){
            alert("Thank you. Considered as urgency (1-2 weeks)");
        } else if (String(projecttime) === "medium"){
            alert("Thank you. Considered as medium (1 month)");
        } else if(String(projecttime) === "long-term"){
            alert("Thank you. Considered as long-term (2+ months)");
        }
        
    } else if (String(contact) === "thesis"){
        alert("Thank you for contacting with me for a Thesis");

        var level = prompt("Thesis Level : \n Undergraduate (BSc / B.Tech)  \n Postgraduate (MSc / M.Tech / MBA)  \n PhD / Doctoral ");
        if (String(level) === "undergraduate"){
            alert("Thank you for chosing Undergraduate thesis level");
        } else if (String(level) === "postgraduate"){
            alert("Thank you for chosing Postgraduate thesis level");
        } else if(String(level) === "phd/doctoral"){
            alert("Thank you for chosing PhD / Doctoral thesis level");
        }
        
    } else if (String(contact) === "meet & greet"){
        alert("Thank you for contacting with me for a Meet & Greet");
    }
    
    var service = prompt("Services? \n App Development \n Web Development");
    if(String(service) === "app Development"){
        alert("Service received for App Development. Thank you.");
    } else if (String(service) === "web Development"){
        alert("Service received for Web Development. Thank you.");
    }
    
    var offer = prompt("Are you offering a job?");
    if(String(offer) === "Yes"){
        alert("Thanks for your job offering. I'm interested.");
    } else if (String(offer) === "No"){
        alert("I am very much happy to collaborate with you.");
    }
    
    var position = prompt("Your position in company?");
    if(String(position) === "HR"){
        alert("Thank you HR. Have a good day.");
    } else if (String(position) === "CEO"){
        alert("Thank you CEO. Have a good day.");
    } else if (String(position) === "GM"){
        alert("Thank you GM. Have a good day.");
    }
}