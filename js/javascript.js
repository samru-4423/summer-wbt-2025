function contactme(){
    var contact = prompt("Reason for contacting? \n 1. Project \n 2. Thesis \n 3. Meet & Greet");
    if(Number(contact) === 1){
        alert("Thank you for contacting with me for a project");
        
        var project = prompt("Project Type : \n 1. Academic  \n 2. Freelance  \n 3. Startup ");
        if (Number(project) === 1){
            alert("Thank you for chosing Academic project type");
        } else if (Number(project) === 2){
            alert("Thank you for chosing Freelance project type");
        } else if(Number(project) === 3){
            alert("Thank you for chosing Startup project type");
        }
        
        var projecttime = prompt("Project Urgency : \n 1. Urgent (1-2 weeks) \n 2. Medium (1 month) \n 3. Long-term (2+ months)");
        if (Number(projecttime) === 1){
            alert("Thank you. Considered as urgency (1-2 weeks)");
        } else if (Number(projecttime) === 2){
            alert("Thank you. Considered as medium (1 month)");
        } else if(Number(projecttime) === 3){
            alert("Thank you. Considered as long-term (2+ months)");
        }
        
    } else if (Number(contact) === 2){
        alert("Thank you for contacting with me for a Thesis");

        var level = prompt("Thesis Level : \n 1. Undergraduate (BSc / B.Tech)  \n 2. Postgraduate (MSc / M.Tech / MBA)  \n 3. PhD / Doctoral ");
        if (Number(level) === 1){
            alert("Thank you for chosing Undergraduate thesis level");
        } else if (Number(level) === 2){
            alert("Thank you for chosing Postgraduate thesis level");
        } else if(Number(level) === 3){
            alert("Thank you for chosing PhD / Doctoral thesis level");
        }

        var support = prompt("Support Needed : \n 1. Topic Selection \n 2. Research Design \n 3. Coding \n 4. Data Analysis");
        if (Number(support) === 1){
            alert("Thank you for chosing Topic Selection");
        } else if (Number(support) === 2){
            alert("Thank you for chosing Research Design");
        } else if(Number(support) === 3){
            alert("Thank you for chosing Coding");
        } else if(Number(support) === 4){
            alert("Thank you for chosing Data Analysis");
        }
        
    } else if (Number(contact) === 3){
        alert("Thank you for contacting with me for a Meet & Greet");

        var purpose = prompt("Purpose of Meeting : \n 1. Collaboration Opportunity \n 2. Knowledge Sharing \n 3. Coffee Chat \n 4. Business Partnership Discussion");
        if (Number(purpose) === 1){
            alert("Thank you for chosing Collaboration Opportunity");
        } else if (Number(purpose) === 2){
            alert("Thank you for chosing Knowledge Sharing");
        } else if(Number(purpose) === 3){
            alert("Thank you for chosing Coffee Chat");
        } else if(Number(purpose) === 4){
            alert("Thank you for chosing Business Partnership Discussion");
        }

        var mode = prompt("Preferred Mode : \n 1. Online Meeting (Zoom/ Google Meet) \n 2. Phone Call \n 3. In-person Meeting \n 4. Email Conversation");
        if (Number(mode) === 1){
            alert("Thank you for chosing Online Meeting (Zoom/ Google Meet)");
        } else if (Number(mode) === 2){
            alert("Thank you for chosing Phone Call");
        } else if(Number(mode) === 3){
            alert("Thank you for chosing In-person Meeting");
        } else if(Number(mode) === 4){
            alert("Thank you for chosing Email Conversation");
        }
    }
    
    var service = prompt("Services? \n 1. App Development \n 2. Web Development");
    if(Number(service) === 1){
        alert("Service received for App Development. Thank you.");

        var type = prompt("Type of App : \n 1. Android \n 2. iOS \n 3. Cross-Platform (Flutter / React Native) \n 4. Hybrid App (WebView, etc)");
        if (Number(type) === 1){
            alert("Thank you for chosing Android");
        } else if (Number(type) === 2){
            alert("Thank you for chosing iOS");
        } else if(Number(type) === 3){
            alert("Thank you for chosing Cross-Platform");
        } else if(Number(type) === 4){
            alert("Thank you for chosing Hybrid App");
        } 

        var category = prompt("App Category : \n 1. E-commerce \n 2. Educational \n 3. Social Media \n 4. Healthcare \n 5. Finance \n 6. Travel");
        if (Number(category) === 1){
            alert("Thank you for chosing E-commerce");
        } else if (Number(category) === 2){
            alert("Thank you for chosing Educational");
        } else if(Number(category) === 3){
            alert("Thank you for chosing Social Media");
        } else if(Number(category) === 4){
            alert("Thank you for chosing Healthcare");
        } else if(Number(category) === 5){
            alert("Thank you for chosing Finance");
        } else if(Number(category) === 6){
            alert("Thank you for chosing Travel");
        } 

        var feature = prompt("Required Features : \n 1. User Login / Registration \n 2. Push Notifications \n 3. Real-time Chat \n 4. Admin Panel \n 5. API Integration \n 6. Offline Mode");
        if (Number(feature) === 1){
            alert("Thank you for chosing User Login / Registration");
        } else if (Number(feature) === 2){
            alert("Thank you for chosing Push Notifications");
        } else if(Number(feature) === 3){
            alert("Thank you for chosing Real-time Chat");
        } else if(Number(feature) === 4){
            alert("Thank you for chosing Admin Panel");
        } else if(Number(feature) === 5){
            alert("Thank you for chosing API Integration");
        } else if(Number(feature) === 6){
            alert("Thank you for chosing Offline Mode");
        } 
    } else if (Number(service) === 2){
        alert("Service received for Web Development. Thank you.");

        var type = prompt("Type of Website : \n 1. Static Website \n 2. Dynamic Website \n 3. E-commerce Website \n 4. Portfolio Website \n 5. Business Website \n 6. Custom Web Application");
        if (Number(type) === 1){
            alert("Thank you for chosing Static Website");
        } else if (Number(type) === 2){
            alert("Thank you for chosing Dynamic Website");
        } else if(Number(type) === 3){
            alert("Thank you for chosing E-commerce Website");
        } else if(Number(type) === 4){
            alert("Thank you for chosing Portfolio Website");
        } else if(Number(type) === 5){
            alert("Thank you for chosing Business Website");
        } else if(Number(type) === 6){
            alert("Thank you for chosing Custom Web Application");
        } 

        var feature = prompt("Required Features : \n 1. User Login / Signup \n 2. Admin Panel \n 3. Database Integration \n 4. Responsive Design \n 5. Third-party API Integration \n 6. Multilingual Support");
        if (Number(feature) === 1){
            alert("Thank you for chosing User Login / Signup");
        } else if (Number(feature) === 2){
            alert("Thank you for chosing Admin Panel");
        } else if(Number(feature) === 3){
            alert("Thank you for chosing Database Integration");
        } else if(Number(feature) === 4){
            alert("Thank you for chosing Responsive Design");
        } else if(Number(feature) === 5){
            alert("Thank you for chosing Third-party API Integration");
        } else if(Number(feature) === 6){
            alert("Thank you for chosing Multilingual Support");
        } 
    }
    
    
    var offer = prompt("Are you offering a job? \n 1. Yes \n 2. No");
    if(Number(offer) === 1){
        alert("Thanks for your job offering. I'm interested.");
    } else if (Number(offer) === 2){
        alert("I am very much happy to collaborate with you.");
    }
    
    var position = prompt("Your position in company? \n 1. HR \n 2. CEO \n 3. GM");
    if(Number(position) === 1){
        alert("Thank you HR. Have a good day.");
    } else if (Number(position) === 2){
        alert("Thank you CEO. Have a good day.");
    } else if (Number(position) === 3){
        alert("Thank you GM. Have a good day.");
    }
}