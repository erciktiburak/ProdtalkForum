# PRODTALK

Introduction

Purpose

The purpose of this document is to provide a comprehensive overview of the requirements for developing a forum site using the Laravel and Vue.js frameworks. It aims to define the project's goals, scope, constraints, interfaces, and interactions. Additionally, a detailed requirement report for the system will be presented. This document will serve as a crucial reference for our development team, ensuring smooth coordination and minimizing inter-departmental issues during the implementation process.

The primary audience for this document is the customer, who will review and approve it. It will serve as a guide for the development team in creating the initial version of the system. Moreover, in case of any changes in the development team or system transfer, this document will act as a reference guide for the overall operation of the system.

Furthermore, the project incorporates a semantic analysis method that effectively identifies and flags negative comments on the forum website. This feature plays a vital role in safeguarding the business's reputation and maintaining appropriate content on the platform.

Product Scope

"ProdTalk Forum" is a user-friendly and mobile-responsive forum website that enables customers to provide feedback on products offered by companies. The website is optimized for mobile devices, eliminating the need for a separate mobile application. Registered users, who are customers that have made a product purchase, can engage in various activities such as sharing posts, opening support tickets, and utilizing other interactive features. This customer-based login system ensures efficient communication between customers and the admin team for prompt feedback handling. All user-generated posts undergo moderation by an admin before being published on the forum. The Forum Manager has additional privileges to edit, delete, and share posts as needed.

To safeguard the business's reputation and maintain appropriate content, a semantic analysis approach will be employed to prevent the display of unfavorable reviews. This method involves analyzing all comments posted on the forum site using natural language processing techniques. It enables the system to comprehend the meaning of comments, detect negative or inappropriate content, and flag them for review by a moderator. Only after the moderator's approval will these comments be displayed on the website.

The "ProdTalk Forum" website is easily accessible to customers worldwide, providing them with a platform to express their feedback on purchased products. All system data is securely stored in a web server-based database. As a web application, the "ProdTalk Forum" empowers customers to provide quick feedback on products and offer assistance to other customers in a multitude of ways.
References
From this source, I examined the working principle of forum systems
- Analyzing Internet Forums: A Practical Guide (Peter Holtz, Nicole Kronberger,  Wolfgang Wagner)
https://www.researchgate.net/publication/254735438_Analyzing_Internet_Forums_A_Practical_Guide
Overall Description

Product Perspective

The "ProdTalk Forum" system is a web-based application that is hosted on the internet.

User Registration: New users can register as admins or customers, granting them access to the forum and its functionalities.
\item \textbf{User Roles and Permissions:} Both admins and customers will have access to view, edit, delete, and add posts. This ensures that users have control over their content and can actively participate in the forum.
\item \textbf{Voting System:} Users can vote on posts, and the post with the highest votes will be featured as the "Post of the Day." This encourages user engagement and highlights popular and valuable content.
\item \textbf{Content Management: Admins will have the ability to manage content-related information, such as organizing posts into categories, tagging posts with relevant keywords, and promoting new content to increase its visibility.
\item \textbf{Post Search and Viewing:} Both admins and customers can search for and view all posts on the forum, including their own. This allows users to explore different topics and access their own contributions easily.
\item \textbf{Commenting and Discussions:} Users can read and engage in discussions by commenting on posts. This fosters community interaction and encourages conversations around various topics.
\item \textbf{Report System:} Users can report inappropriate content or behavior to admins. Admins can review and take appropriate actions, such as deleting or addressing the reported content, to maintain a safe and respectful environment.
\item \textbf{User Profiles:} Users can create and customize their profiles with information such as a profile picture, bio, and social media links. This helps users connect with each other and establish their online presence within the forum community.
\item \textbf{Notifications:} Users receive notifications for activities related to their posts, such as new comments or likes. This keeps them updated on the interactions happening around their contributions.
\item \textbf{Analytics and Insights:} Admins have access to analytics and insights on user engagement, post performance, and other relevant metrics. This data can be used to understand user behavior, improve the forum's functionality, and make data-driven decisions.


The "ProdTalk Forum" website requires an active internet connection in order to communicate with the server

Product Functions
This project aims to significantly enhance the company's product sales by providing customers with valuable feedback on the products through a forum site. The inclusion of a forum site will distinguish our website and facilitate informed purchasing decisions for customers. By showcasing reviews from other customers, potential buyers can easily evaluate their experiences and make informed choices accordingly.
Customers who have purchased the products will be able to share posts, comment on existing posts, and like other users' contributions. Posts from customers who have made purchases will automatically be made public. However, commenting privileges will be restricted for users without a registered email address in our system.
Using the forum site is straightforward. After completing a purchase, customers will receive their forum login information via email. Upon accessing the system, customers will be guided through profile completion steps, granting them full access to all site features.
To maintain the integrity of the forum and ensure that only genuine customers can provide reviews, a semantic analysis feature will be integrated into the registration process. This will restrict access to the forum site solely to customers who have made verified product purchases.
The analysis results will be available on an admin panel, allowing administrators to easily review flagged comments and take appropriate action. Additionally, the analysis results can be exported as PDF files for seamless sharing with other departments or team members, such as marketing or customer service.
Moreover, this feature will provide valuable insights into customer satisfaction and help identify potential areas for improvement in the future. By actively monitoring customer feedback, the business can enhance the overall customer experience, foster customer loyalty, and improve customer retention. Additionally, it enables the business to proactively address any issues that may arise, ultimately enhancing overall customer satisfaction. The forum project serves as a valuable tool to elevate customer service and drive sales growth.

The System Functions
Admin Functions:
Admins can automatically generate login information for customers or manually create new accounts.
Post Management: Admins have the authority to add, remove, or update all posts on the forum site, including suggesting modifications to customers' posts.
Customer Profile Viewing: Admins can access and view customer profiles, allowing them to gather information and better understand user demographics.
Semantic Analysis: Admins can utilize semantic analysis tools to identify and eliminate negative or inappropriate reviews, maintaining the quality and integrity of the forum content.
User Functions:
Profile Viewing: Customers have the ability to view their own profiles, enabling them to review their posts, comments, and account details.
Post Management: Customers can add, delete, and update their own posts, providing them with control over their content.
Commenting: Users can engage in discussions by leaving comments on other posts, facilitating interactive and collaborative conversations.
Voting and Rating: Customers can vote on and rate other posts, expressing their opinions and influencing the popularity and visibility of content.
Post Search and Viewing: Users can search for and browse all posts on the forum, allowing them to explore a wide range of topics and discussions.
