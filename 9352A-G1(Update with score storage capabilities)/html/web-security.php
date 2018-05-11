<?php
    session_start();
    include_once '../php/db-inc.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webtech: Web Security</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        if(isset($_SESSION['logged_in']))
        {
          include_once '../user-header.php';
        }
        else
        {
          include_once '../general-header.php';
        }
    ?>
    <div class="cover">
        <div class="bg-item-sm" style="background-image: url(../img/bg-servlet.png)"></div>
    </div>
    
    <div class="ml-3 mr-3 pt-5 mb-10">
        <div class="row">
            <div class="col-sm-3 pt-5 ml-5">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link bg-active" href="#">Web Security</a>
                        <div class="subnav">
                            <ul class="subnav-menu">
                                <li class="nav-item">
                                    <a href="#servlet-overview">Web Security: Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#php-cookies">OWASP Top 10 Application Security Risk</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="col-sm-8 text-justify ml-2">
                <div class="sub-container pt-5" id="servlet-overview">
                    <h1 class="text-left">Web Security</h1>
                    <hr>
                    <p class="lead"><strong class="highlight-text">Web security</strong> is progressively significant for every topic in an organization that can be hold or grasp firmly. The size keeps on getting greater when it comes to the online criminals with their career and now have powerful threat that was created by the states personal and security. </p>
                </div>
                
                 <div class="sub-container pt-5" id="servlet-overview">
                    <h2 class="text-left">OWASP Top 10 Application Security Risk</h2>
                    <hr>
                    <p class="lead">The OWASP Top 10 helped with the guidance to secure development of online requests and protect them from hostile action. The course that you can go through the composition, and condition of what is important due to the risks, how the association builds a software for the web and how they can defend against them.</p>
                    <ol class="list">
                        <li class="ctr list-type-circle-lg strong-li">Injection
                            <p class="lead"><strong class="highlight-text">Injection</strong> is the most popular or the number one list on OWASP. This was more on a type of looking that was like a category which includes lots of types of vulnerabilities, where any application gives a not secured data in an interpreter. Mostly, injection can be found on databases, some of the examples are the commands in operating systems when someone or the user input is being delivered as arguments in the program.</p>   
                            <h5 class="ml-11 mt-4 text-left">Prevention/s:</h5>
                            <ul class="list ml-9 fw-normal">
                                <li class="m-3">The remediation may likely vary from the problem based on the type of vector you were talking about. One of the possible solution to be done is by using an API which will be avoiding an interpreter or will give an interface which is being parameterized.</li>
                                <li class="m-3">If you encounter some queries which have been parameterized, those will not be a possible solution to be followed. The work would be done depending on the interpreter that was used, and anything that you must check.</li>
                                <li class="m-3">Also, an alternative would be by using a whitelist for the validation input, but many of the cases cannot be used because an application is needing characters that are special as an input to it. One example of it would be, someone wants to give permissions to the users to have their comments by means of quotes, even if the case is that it is character that may be used to get out form a query. If these was the case, go with the two solutions above.</li>
                            </ul>
                        </li>
                        <li class="ctr list-type-circle-lg strong-li">Broken Authentication
                            <p class="lead"><strong class="highlight-text">Broken Description</strong> will include all types of flaws which are mostly caused by some errors in implementing a management session. Because of having a very broad range of so many kinds or types of vulnerabilities, this will cause to a not very easy to know or define what are its unique, or most important properties.</p>
                            <h5 class="ml-11 mt-4 text-left">Prevention/s:</h5>
                            <p class="lead ml-11">The security would be badly needing to be as a part of the whole in the process of developing until from the very beginning. This will be the one and only way to make sure nothing can be over used in away that was not planned to when or during its development process. As of those types of vulnerabilities are hard to find or look at afterwards.</p>
                            <p class="lead ml-11 mt-3">Almost all the types of vulnerabilities that includes in the category is there or is existing because of the many programmers or developers gets problems in many ways.
                            </p>
                        </li>
                        <li class="ctr list-type-circle-lg strong-li">Sensitive Data Exposure
                            <p class="lead"><strong class="highlight-text">Sensitive Data Exposure</strong> most likely occurs when an application does not have a proper protect sensitive information. Data varies and the exposed are any from passwords, credit cards, etc. For example, you have accidentally uploaded something to somewhere. A weak crypto can only mean that attacker could be able to get information to you and because of less of headers which is preventing the browser form caching it.</p>
                            <h5 class="ml-11 mt-4 text-left">Prevention/s:</h5>
                            <p class="lead ml-11">The first thing to do is that you must find out the data that is possible to be a sensitive one and must be protected. Then make sure the followings:</p>
                            <ul class="list ml-9 fw-normal">
                                <li class="m-3">The data should never be placed in a text that is very clear.</li>
                                <li class="m-3">Data should not transmit in a very clear text.</li>
                                <li class="m-3">Make sure that the algorithms that you used for encrypting is strong enough.</li>
                                <li class="m-3">Check If the key was secured or not secured.</li>
                                <li class="m-3">The browser should not able to cache when the data is being turned in to the end-user.</li>
                            </ul>
                        </li>
                        <li class="ctr list-type-circle-lg strong-li">XML External Entities (XEE)
                            <p class="lead">The <strong class="highlight-text">XML External Entity (XXE) Attack</strong> is considered to be a type of server-side request forgery. Basically, it means that attackers can use xml files as a way to bypass the firewall in order to access the files within the server.</p>
                            <p class="lead mt-3">Attackers will issue a request to the server that contains the xml commands within it, and as long as the server accepts the request or has the capability to parse xml files the attack will be successful. The XXE attack is often used for DDOS attacks (Billion Laughs Attack) or it can be to just steal or tamper with the files in the server.</p>
                            <p class="lead mt-3">Insecure and vulnerable web applications are often exposed to these kinds of attacks. As long as the attackers know sufficient information about the server like the directory structure of the website, they will be able to use the attack to achieve their purpose or they can just wreak havoc in the server.</p>
                            <h5 class="ml-11 mt-4 text-left">Prevention/s:</h5>
                            <p class="lead ml-11">As long as it is possible, do not use so many complex data formats, for example is JSON, and you must not encounter serializing the data especially when they are sensitive.</p>
                            <p class="lead ml-11 mt-3">All the XML processors and the libraries must be up to date in use by the application or in the operating system.</p>
                        </li>
                        <li class="ctr list-type-circle-lg strong-li">Broken Access Control
                        <p class="lead">The lack of proper process of detection and lack of successful functional testing by the application developers. In addition, this is not typically accommodating to the operation of dynamic testing. The impact of these to the users is that their data could be exploited to the skill of the attackers and then they will show it to the different people or users.</p>
                        <h5 class="ml-11 mt-4 text-left">Prevention/s:</h5>
                        <ul class="list ml-9 fw-normal">
                            <li class="m-3">Disabling the web server from registering and makes certain that the file data are not available in the web roots.</li>
                            <li class="m-3">Uniqueness of the application business restricts the requirements from imposing the system.</li>
                            <li class="m-3">Log all unsuccessful access requests to a more secure address for the review of the administrators.</li>    
                        </ul>
                        </li>
                        <li class="ctr list-type-circle-lg strong-li">Security Misconfiguration
                            <p class="lead"><strong class="highlight-text">Security Misconfiguration</strong> is a type, or a component is very susceptible to a configuration that has many insecurities and is being classified as a protector or as a security that leads to a misconfiguration. This is acceptable as a look a like or the same vulnerability regardless of whatever the misconfiguration is occurring or happening in a web server, in a custom mode or in a database.</p>
                            <h5 class="ml-11 mt-4 text-left">Prevention/s:</h5>
                            <ul class="list ml-9 fw-normal">
                                <li class="m-3">You should always make sure that all has been updated. When creating the system, you should make it very easy to give or deploy all the updates of the software as well as all the patches.</li>
                                <li class="m-3">The configuration staging must not be different and must be the same every time. Almost all of the misconfigurations are because of the inconsistencies.</li>
                                <li class="m-3">A large percentage of us is very good in committing mistakes, and that is why we should make sure that we automate all the things that can be automated. If the set-up will be the same as well as the procedure is being processed often, it would be recommended that you must make sure it will be secured and then just repeat everything.</li>
                                <li class="m-3">You should do some scanning, or you should do some auditing which must be done regularly to learn or discover the misconfigurations that will be possible to occur.</li>
                                <li class="m-3">When it will be possible, the system must surely be configured with you keeping in mind that the system will be compromised since is very likely or same. When there is a security breach, the attacker will be limited to only to do a very small amount of damage.</li>
                            </ul>
                        </li>
                        <li class="ctr list-type-circle-lg strong-li">Cross-Site Scripting (XSS)
                            <p class="lead"><strong class="highlight-text">Cross-Site Scripting</strong> is yet another kind of an attack being done, that can be tag along or carried out on compromised people or the users of a website. The deployment or exploitation of the a Cross-Site Scripting flaw will enable any attacker to have an injection to a script that are client-side into all web pages that can be see or can be viewed by the users.</p>
                            <p class="lead mt-3">We can say that the cross-site scripting or XSS means JavaScript, but in some cases may include a for example a VBScript.
                            <h5 class="ml-11 mt-4 text-left">Prevention/s:</h5>
                            <p class="lead ml-11">It has very high chance or is very potential for every not wanted or very dangerous characters to be surely sanitized or be escaped or went out. This can be done in many ways and it will be depending on what will be the context, and many of the most cases will be the article or information about the knowledge of us on databases be enough or sufficient.</p>
                            <p class="lead ml-11 mt-3">The application must also always be developed or created with the XSS having so many risks in your thought, and this will make all those harmful, little or big, to most likely happen if there is a XSS vulnerability.</p>
                        </li>
                        <li class="ctr list-type-circle-lg strong-li">Insecure Deserialization
                            <p class="lead">Insecure Deserialization is a vulnerability which usually happens when an untrusted data is being processed or is being used for the misused of the applications logic, which is commonly inflicts service denials (DoS) attack, or even process or execute arbitrary code upon being deserialized.</p>
                            <h5 class="ml-11 mt-4 text-left">Three Main Types</h5>
                            <ul class="list ml-9">
                                <li class="m-3">Blind Deserialization Attacks
                                    <p class="lead">Attacks that happen behind restricted firewall protected networks by exploiting payloads or manipulating chain of Transformers.</p>
                                </li>
                                <li class="m-3">Asynchronous Deserialization Attacks
                                    <p class="lead">Attack that stores serialized gadgets in databases then attacks when a target application deserializes, and is uses a sequence of ROP (return-oriented programming) gadget that end in RET (return from procedure) instruction.</p>
                                </li>
                                <li class="m-3">Deferred-Execution Deserialization
                                    <p class="lead">Uses a sequence of ROP (return-oriented programming) gadget that end in RET (return from procedure) instruction. It bypasses non-executable page protections like read-only memory and kernel-code cohesion protections.</p>
                                </li>
                            </ul>
                            <h5 class="ml-11 mt-5 text-left">Prevention/s:</h5>
                            <ul class="list ml-9">
                                <li class="m-3">Blacklisting
                                    <p class="lead">Deny access to sensitive that are unsafe</p>
                                <li class="m-3">Whitelisting
                                    <p class="lead">allow access to exclusive users, domains and software</p>
                                </li>
                            </ul>
                        </li>
                        <li class="ctr list-type-circle-lg strong-li">Using Components with known Vulnerabilities
                            <p class="lead">In what we believe, it seems that it is very easy to find out or figure out if you are currently experiencing any components or libraries that is vulnerable. But I some cases, reports or issues on vulnerability in a commercial or into an open source software does not always tell he exact of which type is are standardly vulnerable.</p>
                            <p class="lead mt-3">Furthermore, not all of the libraries are using a version that is simple or understandable by most of using the system of numbering. The worst case would be, not every single one of the vulnerabilities are being told or reported to a center of house clearing that is not hard to search.</p>
                            <h5 class="ml-11 mt-4 text-left">Prevention/s:</h5>
                            <p class="lead ml-11">Many of the complex projects does not make or create patches that are vulnerable for the pas versions. But, will surely fix the problem in the future versions. So in upgrading to the newer versions is very important. Project software processes should have the following:</p>
                            <ul class="list ml-9 fw-normal">
                                <li class="m-3">You must know all the types and all the versions that you are currently using which includes all the dependencies.</li>
                                <li class="m-3">Must always monitor the security and types on databases that are public.</li>
                                <li class="m-3">You must create security policies about the use of the components.</li>
                                <li class="m-3">Disable all unused functionalities and must always check every aspect of the component.</li>
                            </ul>
                        </li>
                        <li class="ctr list-type-circle-lg strong-li">Insufficient Logging and Monitoring
                            <p class="lead"><strong class="highlight-text">Insufficient Logging and Monitoring</strong>, instead of having so many vulnerabilities, is a category of OWASP that handles and covers having less of many good practices that may turn on become on preventing or stopping.</p>
                            <p class="lead mt-3">This type or category covers everything from all the events that have not been logged are recorded, all logs that have not been recorded or kept properly and warnings which has no action or work is being taken from within a reasonable time.
                            </p>
                            <h5 class="ml-11 mt-4 text-left">Prevention/s:</h5>
                            <p class="lead ml-11">You must always make sure that the logs or the records have always a backed up and is in synchronized to a different server. The attacker will surely will not have the ability to remove or clear all the records after hacking the chosen server and just by doing it would be prevented.</p>
                            <p class="lead mt-3 ml-11">You must also go and check everything from the system and must be made sure that all sensitive actions are recorded. This will include all logins, transactions that are important, changing the passwords, etc. This is very important when knowing if it has been acting afterwards.
                            </p>
                        </li>
                    </ol>
                </div>
                
            </div>
        </div>
    </div>
    
    <footer>       
        <div class="row"> 
        <div class="col-xl-6 text-left">
            <p>Saint Louis University, Maryheights Campus</p>  
            <p>School of Computing and Information Sciences</p> 
            <p>Web Systems and Technologies</p> 
        </div>
        <div class="col-xl-6 text-right">    
            <a href="../index.php"><img src="../img/webtech2.png" alt="logo"></a>
            <p>Copyright &copy; 2018 Webtech. All rights reserved.</p>  
            </div>
        </div>
    </footer>
    
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>