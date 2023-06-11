# PRODTALK

## Introduction

### Purpose

The purpose of this document is to provide a comprehensive overview of the requirements for developing a forum site using the Laravel and Vue.js frameworks. It aims to define the project's goals, scope, constraints, interfaces, and interactions. Additionally, a detailed requirement report for the system will be presented. This document will serve as a crucial reference for our development team, ensuring smooth coordination and minimizing inter-departmental issues during the implementation process.

The primary audience for this document is the customer, who will review and approve it. It will serve as a guide for the development team in creating the initial version of the system. Moreover, in case of any changes in the development team or system transfer, this document will act as a reference guide for the overall operation of the system.

Furthermore, the project incorporates a semantic analysis method that effectively identifies and flags negative comments on the forum website. This feature plays a vital role in safeguarding the business's reputation and maintaining appropriate content on the platform.

### Product Scope

"ProdTalk Forum" is a user-friendly and mobile-responsive forum website that enables customers to provide feedback on products offered by companies. The website is optimized for mobile devices, eliminating the need for a separate mobile application. Registered users, who are customers that have made a product purchase, can engage in various activities such as sharing posts, opening support tickets, and utilizing other interactive features. This customer-based login system ensures efficient communication between customers and the admin team for prompt feedback handling. All user-generated posts undergo moderation by an admin before being published on the forum. The Forum Manager has additional privileges to edit, delete, and share posts as needed.

To safeguard the business's reputation and maintain appropriate content, a semantic analysis approach will be employed to prevent the display of unfavorable reviews. This method involves analyzing all comments posted on the forum site using natural language processing techniques. It enables the system to comprehend the meaning of comments, detect negative or inappropriate content, and flag them for review by a moderator. Only after the moderator's approval will these comments be displayed on the website.

The "ProdTalk Forum" website is easily accessible to customers worldwide, providing them with a platform to express their feedback on purchased products. All system data is securely stored in a web server-based database. As a web application, the "ProdTalk Forum" empowers customers to provide quick feedback on products and offer assistance to other customers in a multitude of ways.
References
From this source, I examined the working principle of forum systems
- Analyzing Internet Forums: A Practical Guide (Peter Holtz, Nicole Kronberger,  Wolfgang Wagner)
https://www.researchgate.net/publication/254735438_Analyzing_Internet_Forums_A_Practical_Guide
Overall Description

### Product Perspective

The "ProdTalk Forum" system is a web-based application that is hosted on the internet.

User Registration: New users can register as admins or customers, granting them access to the forum and its functionalities.
1. User Roles and Permissions:} Both admins and customers will have access to view, edit, delete, and add posts. This ensures that users have control over their content and can actively participate in the forum.
1. Voting System:} Users can vote on posts, and the post with the highest votes will be featured as the "Post of the Day." This encourages user engagement and highlights popular and valuable content.
1. Content Management: Admins will have the ability to manage content-related information, such as organizing posts into categories, tagging posts with relevant keywords, and promoting new content to increase its visibility.
1. Post Search and Viewing:} Both admins and customers can search for and view all posts on the forum, including their own. This allows users to explore different topics and access their own contributions easily.
1. Commenting and Discussions:} Users can read and engage in discussions by commenting on posts. This fosters community interaction and encourages conversations around various topics.
1. Report System:} Users can report inappropriate content or behavior to admins. Admins can review and take appropriate actions, such as deleting or addressing the reported content, to maintain a safe and respectful environment.
1. User Profiles:} Users can create and customize their profiles with information such as a profile picture, bio, and social media links. This helps users connect with each other and establish their online presence within the forum community.
1. Notifications:} Users receive notifications for activities related to their posts, such as new comments or likes. This keeps them updated on the interactions happening around their contributions.
1. Analytics and Insights:} Admins have access to analytics and insights on user engagement, post performance, and other relevant metrics. This data can be used to understand user behavior, improve the forum's functionality, and make data-driven decisions.


The "ProdTalk Forum" website requires an active internet connection in order to communicate with the server

Product Functions
This project aims to significantly enhance the company's product sales by providing customers with valuable feedback on the products through a forum site. The inclusion of a forum site will distinguish our website and facilitate informed purchasing decisions for customers. By showcasing reviews from other customers, potential buyers can easily evaluate their experiences and make informed choices accordingly.
Customers who have purchased the products will be able to share posts, comment on existing posts, and like other users' contributions. Posts from customers who have made purchases will automatically be made public. However, commenting privileges will be restricted for users without a registered email address in our system.
Using the forum site is straightforward. After completing a purchase, customers will receive their forum login information via email. Upon accessing the system, customers will be guided through profile completion steps, granting them full access to all site features.
To maintain the integrity of the forum and ensure that only genuine customers can provide reviews, a semantic analysis feature will be integrated into the registration process. This will restrict access to the forum site solely to customers who have made verified product purchases.
The analysis results will be available on an admin panel, allowing administrators to easily review flagged comments and take appropriate action. Additionally, the analysis results can be exported as PDF files for seamless sharing with other departments or team members, such as marketing or customer service.
Moreover, this feature will provide valuable insights into customer satisfaction and help identify potential areas for improvement in the future. By actively monitoring customer feedback, the business can enhance the overall customer experience, foster customer loyalty, and improve customer retention. Additionally, it enables the business to proactively address any issues that may arise, ultimately enhancing overall customer satisfaction. The forum project serves as a valuable tool to elevate customer service and drive sales growth.

### The System Functions
#### Admin Functions:
Admins can automatically generate login information for customers or manually create new accounts.
* Post Management: Admins have the authority to add, remove, or update all posts on the forum site, including suggesting modifications to customers' posts.
* Customer Profile Viewing: Admins can access and view customer profiles, allowing them to gather information and better understand user demographics.
* Semantic Analysis: Admins can utilize semantic analysis tools to identify and eliminate negative or inappropriate reviews, maintaining the quality and integrity of the forum content.
#### User Functions:
* Profile Viewing: Customers have the ability to view their own profiles, enabling them to review their posts, comments, and account details.
* Post Management: Customers can add, delete, and update their own posts, providing them with control over their content.
* Commenting: Users can engage in discussions by leaving comments on other posts, facilitating interactive and collaborative conversations.
* Voting and Rating: Customers can vote on and rate other posts, expressing their opinions and influencing the popularity and visibility of content.
* Post Search and Viewing: Users can search for and browse all posts on the forum, allowing them to explore a wide range of topics and discussions.

#### Automation Operations:

* Forum Satisfaction: To ensure customer satisfaction, a short survey will be conducted to gather feedback about the forum experience.
* Data Collection and Analysis: Automatically collect and analyze data from customer posts and feedback to identify trends and potential issues.
* Post Management: Automatically manage customer posts by sorting and organizing them in the admin panel for easy viewing and editing.
* Customer Communication: Automatically send personalized messages to customers to address any issues or concerns they may have.
* Automatic Post Approval: Automatically approve or deny posts based on predefined criteria and rules to ensure compliance with community guidelines.
* Email Notifications: Send email notifications to customers when their posts are approved or denied.
* Performance Tracking: Automatically track and monitor the performance and effectiveness of the forum to identify areas for improvement.
* Semantic Analysis: Utilize advanced natural language processing techniques to detect and analyze sentiment in customer feedback, allowing for automatic identification and removal of bad reviews.
* Real-time monitoring: Continuously monitor and analyze customer feedback, allowing for immediate identification and resolution of any issues that may arise.
* Feedback report: Automatically generate detailed reports on customer feedback, including statistics, trends, and insights, which can be shared with other departments or team members.

All of the above features work together to make the forum run smoothly and efficiently, providing a better experience for both customers and the company. Additionally, the use of advanced automation techniques such as semantic analysis and real-time monitoring will enable the company to gain valuable insights and make data-driven decisions to improve the overall customer experience.

### User Types and Characteristics

The forum website has two types of users: Administrators and Customers.

* Administrators: These are users who have the ability to manage the content on the forum, including adding, editing, and deleting posts. They also have access to advanced features such as semantic analysis and report generation.
* Customers: These are users who have the ability to view, create, and comment on posts on the forum. They must have a valid login to access the forum, which can be obtained by purchasing a product or scanning a QR code.
* User Privileges: Customers have access to a limited set of features, while Administrators have access to all features. Customers can only access their own posts and comments, while Administrators can access all posts and comments.
* Access Method: Customers can access the forum website by logging in with their login information, while Administrators can access the forum website through the admin panel.
* User Verification: Customers must be verified as having purchased a product before they can access the forum, this can be done through email verification and QR code scanning.
* User Management: Administrators have the ability to manage and monitor customer accounts, including the ability to block or delete accounts that violate the forum's terms of service.
* Security: The forum website uses advanced security measures to protect user data and prevent unauthorized access. This includes encryption, password hashing, and IP blocking.

Overall, the forum website is designed to provide a secure and user-friendly experience for both Administrators and Customers, with a range of features and functionalities to meet their different needs.

### Actor(Client and Administrator) Survey
#### Client (Customer):
Customers can access the system by logging in with their registered credentials, typically via their email. Once logged in, they can explore and browse through posts, view post details, leave comments, and express their preferences by liking or disliking posts. Customers have the option to edit their own posts, select preferences from a provided list, and cancel selections if necessary. Additionally, they can create and manage their user profile, including customizing their profile picture, username, and bio. The search functionality enables customers to find other users, whom they can follow, unfollow, or block as required. Customers also have the ability to create, join, or leave groups and actively participate in group discussions.

#### Administrator:
Administrators are responsible for managing the forum site and overseeing its content. They have the authority to create login credentials for new customers and maintain overall control. Administrators can view, edit, add, and remove posts as necessary. They can also communicate directly with customers through a messaging feature. Additionally, administrators have the ability to suggest updates for customers' posts, make changes, or delete them if needed. They play a vital role in monitoring the website for inappropriate content and moderating user-generated content. Administrators also manage user accounts and profiles, with the capability to disable, delete, or ban users when required. They can create, manage, and moderate groups, and have the authority to assign moderators. Administrators can also customize the website's appearance, including the theme, color scheme, and branding, to align with the forum's desired aesthetics.

### Operating Environment

The system's backend will be built using the latest version of .NET Core and will leverage Google Firebase Storage for efficient data storage. This setup guarantees excellent performance and scalability for the API services.
For the web interface, the frontend development will involve utilizing Laravel 10.0 vue.js and Tailwindcss. The website will feature a multi-page structure, delivering a dynamic and engaging user experience.
To accommodate mobile users, the website will prioritize responsive design, ensuring seamless access across various devices, including smartphones and tablets. This approach aims to provide an accessible and user-friendly experience for users on the move. Thorough testing will be conducted on different devices and web browsers to guarantee compatibility and smooth functionality.

### Design and Implementation Constraints

The development of the Laravel-Vue forum website poses some difficulties, particularly in regard to ensuring efficient communication between the client and server applications. Users will be able to share posts and receive prompt responses from the web server. However, when high-dimensional media, such as images, are shared, they will be subject to system review before being posted to the forum.

Two key limitations have been identified in the system. First, high-dimensional media shares will be moderated by an administrator to ensure compliance with the website's guidelines. Second, the use of certain forbidden words, such as slang, will be prohibited in order to maintain a respectful and professional tone on the forum.

Additionally, the system implements a semantic analysis method to detect and flag potentially negative or harmful comments, to ensure a safe and welcoming environment for all users.

### User Documentation

When customers log into the system, a user manual will be included in the system to help customers understand the usage and working methodology of the system.
This user manual is written in a simple and very descriptive way for all users (all ages, non-technical, unskilled, etc.). The level and content of terminology in the system are also mentioned.

Briefly, the user manual covers the system's features and purpose. The user guide includes menu usage, product details, a glossary of terms, and a support section where the customer can get support in case of any problems.

### Assumptions and Dependencies

### External Interface Requirements

#### User Interfaces

Upon accessing the web application, new users will be directed to the homepage where they can view the shared posts. To access additional features, users are required to create an account by making a purchase on the website.

Once logged in, users can create their own posts. Each shared post will have an associated edit button, allowing users to modify the content. Editing the post will open a dedicated page where users can update the title and description.

Users will also have the ability to search within the system. Clicking on a post will display its details, and users can explore other posts by the same author.

#### Hardware Interfaces

Users accessing the system directly from their mobile devices will require a device with a camera feature to fully utilize certain functionality within the system. This includes, but is not limited to, the ability to upload images, videos and other multimedia content. Additionally, certain features of the system such as QR code scanning, facial recognition, or augmented reality may also require a camera for optimal performance.

#### Software Interfaces

The web application is designed to be compatible with all popular web browsers, including Internet Explorer 9 and above. It is built using the Laravel and Vue frameworks, which provide a robust and efficient environment for the development of web applications. The use of these frameworks ensures that the web app has a clear and consistent structure, making it easy to maintain, update and expand. Additionally, it also ensures that the application is highly performant and scalable.

#### Communications Interfaces

Creating a forum account must be paid, so the system will ban unregistered users. As a result, users will have forum login information when they purchase products. The system should use HTTPS as a communication standard because HTTPS is much more efficient and secure (due to SSL encryption) when small amounts of data are to be sent to clients. Also, thanks to HTTPS, passwords or sensitive data will be encrypted on the client side.

#### Results And Discussion

##### State of the Art Developments

Machine Learning; As part of the project, I implemented a natural language processing (NLP) model using Python. This model effectively analyzes comments, distinguishing between toxic and non- toxic content. Its purpose is to filter out toxic comments, ensuring that only non-toxic comments and threads are shared within the forum. Leveraging machine learning techniques, such as text classification or sentiment analysis, the NLP model plays a vital role in content moderation and creating a positive user experience. I used various libraries such as NLTK, NumPy, CSV, Pickle, and TensorFlow to build a text classification model using deep learning techniques. First, I downloaded the necessary resources from NLTK, including stopwords, tokenization, and lemmatization. Then, I loaded the dataset from a CSV file (560.000 row), skipping the header row. To prepare the dataset, I balanced the classes by selecting samples with positive class labels as "toxic" and those without any positive labels as "non-toxic". I split the dataset into training and testing sets based on the provided ratios. Next, I preprocessed the text data by converting it to lowercase, tokenizing it into words, removing stop words and non-alphabetic characters, lemmatizing 35 the words, and joining them back into strings.

I split the preprocessed data into training and testing sets. To vectorize the text data, I set the maximum sequence length and vocabulary size. I used the Tokenizer from Keras to generate a word index and converted the text data into sequences of word indices. These sequences were then padded or truncated to the specified maximum length. After investing a significant amount of time and effort, I managed to find the optimal parameter values for my model, which resulted in an impressive accuracy. Through persistent experimentation and fine-tuning, I have witnessed my model demonstrating a strong grasp of the underlying patterns within the data, indicating its successful learning process.

For the labels, I performed one-hot encoding to convert them into categorical vectors. Moving on to the model, I defined a sequential architecture using Keras. It consisted of an embedding layer to map word indices to dense vectors, a global max pooling layer to extract important features, and two dense layers with ReLU activation for classification. The output layer had two units with a softmax activation for probability-based predictions. I compiled the model with the Adam optimizer, categorical cross-entropy loss, and accuracy metric. Training the model for a specified number of epochs using the training data, I also validated it on the testing data. Finally, I trained the model using the fit method and stored the training history in the history variable. Finally, My test result is successful.

I have integrated this model into the appropriate sections of my application, specifically utilizing the submitDiscussion method for discussions, the saveComments method for comments, and the postReply method for replies. Now, whenever customers post any discussion, comment, or reply, the model automatically executes and provides a result for the is_nsfw column in my database. The model's output will be either 1, indicating content that is not safe for work (NSFW), or 0, indicating safe for work (SFW) content.

Within the admin dashboard, exclusive to the admin's access, there are dedicated sections displaying the analysis of safe for work (SFW) and not safe for work (NSFW) content. These sections consist of cards specifically designed for Discussions, Replies, and Comments. The dashboard page automatically refreshes every 3 seconds, ensuring that the latest information from the database is promptly displayed to the admin. This allows the admin to monitor the number of individuals engaging in inappropriate commenting behavior, and they can even view these comments directly and take appropriate actions, such as blocking the responsible users.

The admin is provided with a comprehensive view of the NSFW discussions list, offering detailed insights into discussions that contain toxic content. This feature enables the admin to easily identify and access these discussions for further examination. Moreover, the admin has the ability to view the users who have liked comments within these discussions, empowering them with additional contextual information.

The admin is provided with a comprehensive view of the NSFW replies list, offering detailed insights into replies that contain toxic content. This feature enables the admin to easily identify and access these replies for further examination. Moreover, the admin has the ability to view the users who have liked comments within these discussions, empowering them with additional contextual information.

The admin is provided with a comprehensive view of the NSFW discussions list, offering detailed insights into discussions that contain toxic content. This feature enables the admin to easily identify and access these discussions for further examination. Moreover, the admin has the ability to view the users who have liked comments within these discussions, empowering them with additional contextual information.