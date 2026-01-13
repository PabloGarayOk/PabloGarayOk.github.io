## Portfolio Website  
#### Argentina Programa 4.0 – Ticmas Professional Academy

![Website picture](https://PabloGarayOK.github.io/img/web-site.png)

> Personal portfolio website developed as part of the *Argentina Programa 4.0* course.

---

## Project Overview

This project was created as a **mandatory portfolio website** for the *Argentina Programa 4.0* course.

At the time of the course, I had recently finished building my own personal website.  
Instead of recreating the same site from scratch, I chose to **apply and reinforce the concepts learned during the course**, mainly focusing on:

- Improving JavaScript logic
- Understanding better how frontend and backend interact
- Refining form handling and user feedback
- Applying course requirements to an existing real-world project

This approach allowed me to **consolidate knowledge through practice**, rather than duplicating work unnecessarily.

---

## Technologies Used

- HTML  
- CSS  
- JavaScript  
- PHP  

---

## How to Run the Project

To see the full functionality of the site, you can:

- Visit the live version:  
 [portfolio-website](https://pablogaray.com.ar/portfolio/portfolio-website-v1)

**OR**

- Clone the repository and open `index.php` using a local server such as:
  - LAMP  
  - WAMP  

---

## GitHub Pages Note

When running the project from **GitHub Pages**, the contact form cannot send emails due to server limitations.

For this reason, a temporary feedback alert was added for evaluation purposes.

To remove it, edit line **84** of the following file:  
`js/app.js`

```javascript
}else{
    form.submit();
    alert("Sending message!");  // <<<------ Remove this line.
}
```

---

## Email Configuration

To configure the recipient email address, edit line 7 of the following file:
`php/contact-form.php`

```php
$to = 'hello@pablogaray.com.ar'; // <<<------ Change email address
```

You can also modify the email subject by editing line 10:

```php
$subject = 'Portfolio website inquiry'; // <<<------ Change subject
```

---

## Additional Details

In the footer section of index.php, there is a small PHP script that automatically updates the current year and copyright.

This script also serves as a tribute to the Heroes of the Malvinas, included as part of the original project requirements.

--- 

## Author
**Pablo Garay**  
Project type: Academic / Learning Project
Status: Completed for course evaluation.
[View certificate](https://pablogaray.com.ar/pdf/certificate-argentina-programa-4-0-ticmas.pdf)
