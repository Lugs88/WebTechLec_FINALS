<?php
    session_start();
    include_once '../php/db-inc.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webtech: Java Servlets</title>
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
        <div class="bg-item-sm" style="background-image: url(../img/bg-servlet.png)">
        </div>
    </div>
    
    <div class="ml-3 mr-3 pt-5 mb-10">
        <div class="row">
            <div class="col-sm-3 pt-5 ml-5">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link bg-active" href="#">JAVA SERVLETS</a>
                        <div class="subnav">
                            <ul class="subnav-menu">
                                <li class="nav-item">
                                    <a href="#servlet-overview">Java Servlets: Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#servlet-envi">Environment Setup</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#servlet-life">Life Cycle</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#servlet-form">Form Data</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#servlet-client">Client HTTP Request</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#servlet-server">Server HTTP Response</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#servlet-http-code">HTTP Codes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#servlet-filters">Writing Filters</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#servlet-error">Error Handling</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#servlet-cookies">Cookies Handling</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#servlet-session">Session Tracking</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#servlet-database">Database Access</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="col-sm-8 text-justify ml-2">
                <div class="sub-container pt-5" id="servlet-overview">
                    <h1 class="text-left">Java Servlets</h1>
                    <hr>
                    <p class="lead"><strong class="highlight-text">Java Servlets</strong> are programs that can be run on the Web Server or Application Server. These programs acts as the mid layer from the web request or some applications on the server.</p>
                    <p class="lead">By the use of Java Servlets, one can gather input from different users via the forms of the web, the current records of the database, and also dynamically creates a web page.</p>
                    <p class="lead">Java servlets use <strong class="highlight-text">Common Gateway Interface (CGI)</strong> and and have the same use or purpose as programs. Some advantages of servlets on CGI or Common Gateway Interface:</p>
                    <ul class="list">
                        <li>Better Performance</li>
                        <li>Platform-independent</li>
                        <li>Can communicate with other softwares by RMI</li>
                    </ul>
                </div> 
                  
                <div class="sub-container pt-8" id="servlet-envi">
                    <h2 class="text-left">Environment Setup</h2>
                    <hr>
                    <p class="lead">A development environment, it is where the Servlet would be develop by you, also it is where you can test them and run them.</p>
                    <p class="lead">Just like any other Java programs that you know, you are also going to compile a servlet by using javac, a java compiler. After compiling the servlet application, it will be sent in a configured environment for testing and running.</p>
                    <p class="lead">If you are running Windows and installed the SDK in <mark class="formatted-text">C:\jdk1.8.0_65</mark>, you would put the following line in your <mark class="formatted-text">C:\autoexec.bat file</mark>.</p>
<pre class="sample-code">
set PATH = C:\jdk1.8.0_65\bin;%PATH% 
set JAVA_HOME = C:\jdk1.8.0_65 
</pre>
                </div>
                    
                <div class="sub-container pt-8" id="servlet-life">
                    <h2 class="text-left">Life Cycle</h2>
                    <hr>
                    <p class="lead">A servlet life cycle is like as the whole process from its creation or beginning till the destruction or its end. The following are the paths that are followed by a servlet:</p>
                    <ul class="list">
                        <li>Initialized by calling the init() method</li>
                        <li>Calls service() method to process request</li>
                        <li>Terminated by destroy() method</li>
                        <li>Garbage are collected by the garbage collector.</li>
                    </ul>
                    <ol class="list">
                        <li class="list-type-circle-sm">
                            <mark class="formatted-text strong">init() method</mark>
                            <p class="lead">The <strong class="highlight-text">init()method</strong> can only be called once. This method is only called when the servlet is created, and is not called for any user requests. </p>
                        </li>
                        <li class="list-type-circle-sm">
                            <mark class="formatted-text strong">service() method</mark>
                            <p class="lead">It is the main method which processes the true task. It handles the requests coming from the client and responses back to the client.</p>
                        </li>
                        <li class="list-type-circle-sm">
                            <mark class="formatted-text strong">destroy() method</mark>
                            <p class="lead">The <strong class="highlight-text">destroy()</strong> method will be only called once at the end of the servlet. This method may allow your servlet to close all the connections of your database.</p>
                        </li>
                    </ol>
                </div>
                    
                <div class="sub-container pt-8" id="servlet-form">
                    <h2 class="text-left">Form Data</h2>
                    <hr>
                    <p class="lead">The browser has two methods to get and send information in the web browser. The <strong class="highlight-text">GET Method</strong> and the <strong class="highlight-text">POST Method</strong>.</p>
                    <ol class="list ml-5 mt-5">
                        <li class="list-type-circle-lg strong-li">GET Method
                            <p class="lead">This method sends the information of the user that was encoded which is appended to the request of the page. The page and the information was separated by a question mark.</p>
                        </li>
                        <li class="list-type-circle-lg strong-li">POST Method
                            <p class="lead">This is a very good method for the information to pass to a backend program.</p>
                        </li>
                    </ol>
                    <div class="subcontainer-sub ml-3">
                        <h3 class="mt-5">Reading Form Data using Servlet</h3>
                        <ul class="list">
                            <li class="m-1">
                                <mark class="formatted-text strong">getParameter()</mark>
                                <p class="lead">use to get the value of the form</p>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text strong">getParameterValues()</mark>
                                <p class="lead">returns multiple values</p>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text strong">getParameterNames()</mark>
                                <p class="lead">for the complete list of all parameters</p>
                            </li>
                        </ul>
                    </div>
                </div>
                    
                <div class="sub-container pt-8" id="servlet-client">
                    <h2 class="text-left">Client HTTP Request</h2>
                    <hr>
                    <p class="lead">When a client would like to request resources from the server, request details are often stored into the request headers. These won’t be useful to the client/user but they are absolutely necessary to the server. The server uses these headers to identify and organize the information the client wants.</p>
                    <p class="lead">With the importance of client requests clarified, there would be an obvious need for java servlets to have the capability to manipulate these requests. These capabilities can be accessed using the HTTPServletRequest object in java.</p>
                    <p class="lead">The <strong class="highlight-text">HTTPServletRequest</strong> object will enable the servlet to have access to the request headers being sent to the server. With it, the servlet can have a much easier time controlling the flow of information within the server, knowing what kind of requests the client wants.</p>
                </div>
                
                <div class="sub-container pt-8" id="servlet-server">
                    <h2 class="text-left">Server HTTP Response</h2>
                    <hr>
                    <p class="lead">Java servlets, having the capability to access and control request headers, must also have similar capabilities when dealing with server responses. This enables better server-side performance.</p>
	                 <p class="lead">To enable access and control for server responses, the HTTPServletResponse object is used. It has a wide range of methods that will ensure a good and seamless interaction between the servlet and the server.</p>
                </div>
                    
                <div class="sub-container pt-8" id="servlet-http-code">
                    <h2 class="text-left">HTTP Codes</h2>
                    <hr>
                    <p class="lead">Status codes play an important role between the communication of the client and the server. The java servlet can access the functionalities of HTTP codes using the HTTPServletResponse object.</p>
                    <p class="lead">Below are the methods to set HTTP Status Codes:</p>
                    <ol class="list ml-3">
                        <li class="list-type-circle-sm">
                            <mark class="formatted-text strong">public void setStatus(int statusCode)</mark>
                            <p class="lead">The servlet is able to set the status code using the given parameter.</p>
                        </li>
                        <li class="list-type-circle-sm">
                            <mark class="formatted-text strong">public void sendRedirect(String url)</mark>
                            <p class="lead">This method will redirect you to another site using the ‘url’ parameter.</p>
                        </li>
                        <li class="list-type-circle-sm">
                            <mark class="formatted-text strong">public void sendError(int code, String message)</mark>
                            <p class="lead">This method will send to the client the status code along with its message.</p>
                        </li>
                    </ol>
                </div>
                
                <div class="sub-container pt-8" id="servlet-filters">
                    <h2 class="text-left">Writing Filters</h2>
                    <hr>
	                <p class="lead">Filters are tools that the java servlet uses to screen out the requests sent by the client and the responses sent by the server.</p>
                    <p class="lead">Below are listed the types of filters in the java servlet:</p>
                    <ol class="list ml-4">
                        <li class="list-type-circle-sm strong-li">Authentication Filters</li>
                        <li class="list-type-circle-sm strong-li">Data compression Filters</li>
                        <li class="list-type-circle-sm strong-li">Encryption Filters</li>
                        <li class="list-type-circle-sm strong-li">Filters that trigger resource access events</li>
                        <li class="list-type-circle-sm strong-li">Image Conversion Filters</li>
                        <li class="list-type-circle-sm strong-li">Logging and Auditing Filters</li>
                        <li class="list-type-circle-sm strong-li">MIME-TYPE Chain Filters</li>
                        <li class="list-type-circle-sm strong-li">Tokenizing Filters</li>
                        <li class="list-type-circle-sm strong-li">XSL/T Filters That Transform XML Content</li>
                    </ol>
                </div>
                
                <div class="sub-container pt-8" id="servlet-error">
                    <h2 class="text-left">Error Handling</h2>
                    <hr>
                    <p class="lead">When a Java Servlet throws an exception the container will search for the web.xml file which contains the configuration about the error handling such as the location of the error page and the error code or exception type associated with it.</p>
                    <p class="lead">List of Request Attributes:</p>
                    <ol class="list ml-4">
                        <li class="list-type-circle-sm">
                            <mark class="formatted-text strong">javax.servlet.error.status_code</mark>
                            <p class="lead">It gives attribute status code in a java.lang.Integer data type. In addition, the error will hold the status code returned by the container.</p>
                            <p class="lead">Data Type: <mark class="formatted-text">int</mark></p>
                        </li>
                        <li class="list-type-circle-sm">
                            <mark class="formatted-text strong">javax.servlet.error.exception_type</mark>
                            <p class="lead">It gives attribute information about exception type in a java.lang.Class data type. In addition, it is a fully-qualified class name of a Java exception type and is a class instance indicating the type of exception that caused the error.</p>
                            <p class="lead">Data Type: <mark class="formatted-text">Class</mark></p>
                        </li>
                        <li class="list-type-circle-sm">
                            <mark class="formatted-text strong">javax.servlet.error.message</mark>
                            <p class="lead">This attribute gives data exact error message which can be stored and analyzed after storing in a java.lang.String data type. In addition is a string telling the exception message, passed to the exception constructor.</p>
                            <p class="lead">Data Type: <mark class="formatted-text">String</mark></p>
                        </li>
                        <li class="list-type-circle-sm">
                            <mark class="formatted-text strong">javax.servlet.error.request_uri</mark>
                            <p class="lead">This attribute gives details about URL calling the servlet and it can be stored and analysed after storing in a java.lang.String data type. In addition, the error will hold the request URI from where the error request originated.</p>
                            <p class="lead">Data Type: <mark class="formatted-text">String</mark></p>
                        </li>
                        <li class="list-type-circle-sm">
                            <mark class="formatted-text strong">javax.servlet.error.exception</mark>
                            <p class="lead">This attribute gives instruction about the exception raised, which can be stored and analysed. In addition, the error will hold information about the exception thrown.</p>
                            <p class="lead">Data Type: <mark class="formatted-text">Throwable</mark></p>
                        </li>
                        <li class="list-type-circle-sm">
                            <mark class="formatted-text strong">javax.servlet.error.servlet_name</mark>
                            <p class="lead">This attribute gives servlet name which can be stored and analyzed after storing in a java.lang.String data type. In addition, the error will hold the servlet name in case the exception is thrown from within a servlet.</p>
                            <p class="lead">Data Type: <mark class="formatted-text">String</mark></p>
                        </li>
                    </ol>
                    <p class="lead">Sample web.xml format:</p>
<pre class="sample-code">
    &lt;?xml version="1.0" encoding="UTF-8"?&gt;
    &lt;web-app xmlns="http://java.sun.com/xml/ns/javaee" 
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
    xsi:schemaLocation="http://java.sun.com/xml/ns/javaee        
    http://java.sun.com/xml/ns/javaee/web-app_3_0.xsd" version="3.0"&gt;
        &lt;display-name&gt;Title of the page&lt;/display-name&gt;
        &lt;!-- Error Code Related Error Pages --&gt;
    &lt;error-page&gt;
        &lt;error-code&gt;Error Code&lt;/error-code&gt;
        &lt;location&gt;Location of the error page&lt;/location&gt;
   &lt;/error-page&gt;
   &lt;!-- Exception Type Related Error Pages --&gt;
   &lt;error-page&gt;
        &lt;exception-type&gt;Java Class&lt;/exception-type&gt;
        &lt;location&gt;Location of the error page&lt;/location&gt;
   &lt;/error-page&gt;
   &lt;/web-app&gt;
</pre>
                <p class="lead">Sample java class format:</p>
<pre class="sample-code">
    import java.io.IOException;
    import java.io.PrintWriter;

    import javax.servlet.ServletException;
    import javax.servlet.annotation.WebServlet;
    import javax.servlet.http.HttpServlet;
    import javax.servlet.http.HttpServletRequest;
    import javax.servlet.http.HttpServletResponse;

    @WebServlet("Location of error page")
    public class ClassName extends HttpServlet {

        private static final long serialVersionUID = 1L;

        //Get request Exception Handler
        public void doGet(HttpServletRequest request, HttpServletResponse response) throws IOException, ServletException {
            errorProcessMethod(request, response);
        }
        //Post request Exception Handler
        public void doPost(HttpServletRequest request,
                HttpServletResponse response) throws ServletException, IOException {		
                errorProcessMethod(request, response);
        }

        public void errorProcessMethod(HttpServletRequest request, HttpServletResponse response) throws IOException, ServletException {
        //Analyze Exceptions
		Integer statusCode = (Integer) request.getAttribute("javax.servlet.error.status_code");
		String servletName = (String) request.getAttribute("javax.servlet.error.servlet_name");
		// Data about the exception raised
		Throwable throwable = (Throwable) request.getAttribute("javax.servlet.error.exception");
		
		if (servletName == null) {
			servletName = "Unknown";
		}
		// Data about URL calling the servlet
		String requestUri = (String) request.getAttribute("javax.servlet.error.request_uri");
		if (requestUri == null) {
			requestUri = "Unknown";
		}

		//Response content type
		response.setContentType("text/html");
		
		//Print response
		PrintWriter out = response.getWriter();
		String title = "Error/Exception Information";		
		String docType = "<!DOCTYPE html>\n";
		out.println(docType 
				+ "&lt;html&gt;\n" + "&lt;head&gt;&lt;meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"&gt;&lt;title&gt;" + title + "&lt;title&gt;&lt;/head&gt;\n" + "&lt;body>");
		//print content here
		out.println("&lt;/body&gt;\n&lt;/html&gt;");
		out.close();
	}
}
</pre>
                </div>
                
                <div class="sub-container pt-8" id="servlet-cookies">
                    <h2 class="text-left">Cookies Handling</h2>
                    <hr>
                    <p class="lead"><strong class="highlight-text">Cookies</strong> are small text files stored in a computer’s non-volatile storage for tracking information. Cookies are supported in Java Servlets.</p>
                    <p class="lead">The cookies are used in 3 steps:</p>
                    <ol class="list ml-3">
                        <li class="list-type-circle-sm strong">
                            The server script sends cookies to a client (browser).
                        </li>
                        <li class="list-type-circle-sm strong">
                            Cookies are stored in the computer by the browser.
                        </li>
                        <li class="list-type-circle-sm strong">
                            If the browser send a request to the server next time around the client will now send the cookies to the server which the server will use to identify the user.
                        </li>
                    </ol>
                    <div class="subcontainer-sub pt-3 ml-3">
                        <h3>Anatomy of a Cookie</h3>
                        <p class="lead">Cookies are set in an HTTP header in a Java Servlet.</p>
                        <p class="lead">Here is an example of Cookie:</p>
<pre class="sample-code">
    HTTP/1.1 200 OK
    Date: Date
    Server: Server
    Set-Cookie: name = name; expires = expiring date; 
       path = where the cookie will be placed; domain = website domain name
    Connection: close	
    Content-Type: text/html
</pre>
                    </div>
                    <div class="subcontainer-sub pt-3 ml-3" id="servlet-cookies">
                        <h3 class="text-left">Cookies Methods:</h3>
                        <ul class="list">
                            <li class="m-1">
                                <mark class="formatted-text">setDomain(String domainName)</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">getDomain()</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">setMaxAge(int expiresAfterHowManySeconds)</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">getMaxAge()</mark>
                                <p class="lead">(-1) if the cookie will last till the browser shuts down</p>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">getName()</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">setValue(String newValue)</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">getValue()</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">setPath(String uri)</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">getPath()</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">setSecure(boolean flag)</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">setComment(String purpose)</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">getComment()</mark>
                            </li>
                        </ul>
                    </div>
                    <p class="lead">To create a cookie use the Cookie constructor, example:</p>
<pre class="sample-code">
    Cookie cookie1 = new Cookie("key","value");
</pre>
                    <p class="lead">To send a cookie to a client use:</p>
<pre class="sample-code">
    response.addCookie(cookie1);
</pre>
                </div>
                
                <div class="sub-container pt-8" id="servlet-session">
                    <h2 class="text-left">Session Tracking</h2>
                    <hr>
                    <p class="lead">Ways on how to track sessions:</p>
                    <ol class="list">
                        <li class="list-type-circle-sm strong-li">Cookies
                            <p class="lead">Cookies can be used to track sessions by assigning unique Session IDs to each web client and for every requests from the client.</p>
                        </li>
                        <li class="list-type-circle-sm strong-li">Hidden Form Fields
                            <p class="lead">A server can send a hidden HTML form with a unique Session ID for example:</p>
<pre class="sample-code fw-400">
    &lt;input type = "hidden" name = "sessionid" value = "Unique Value"&gt;
</pre>
                        </li>
                        <li class="list-type-circle-sm strong-li">URL Rewriting
                            <p class="lead">The server can add a semicolon (;) and attach sessionID = <strong class="highlight-text">Unique Value</strong> to the URL</p>
                        </li>
                        <li class="list-type-circle-sm strong-li">HttpSession Object
                            <p class="lead">Using HttpSession session = request.getSession(); in the Servlet Script</p>
                        </li>
                    </ol>
                    <div class="subcontainer-sub pt-8 ml-3">
                        <h3>Session Methods</h3>
                        <hr>
                        <ul class="list">
                            <li class="m-1">
                                <mark class="formatted-text">getAttribute(String name)</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">getAttributeNames()</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">getCreationTime()getId()</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">getLastAccessedTime()</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">getMaxInactiveInterval()</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">invalidate()</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">boolean isNew()</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">removeAttribute(String name)</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">setAttribute(String name, Object value)</mark>
                            </li>
                            <li class="m-1">
                                <mark class="formatted-text">setMaxInactiveInterval(int interval)</mark>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="subcontainer pt-8" id="servlet-database">
                    <h3 class="text-left">Database Access</h3>
                    <hr>    
                    <p class="lead">To access a database you need a JDBC driver and the following code.</p>
<pre class="sample-code">
    package com.jwt.servlet;
 
    import java.io.IOException;
    import java.io.PrintWriter;
    import java.sql.Connection;
    import java.sql.DriverManager;
    import java.sql.PreparedStatement;

    import javax.servlet.ServletException;
    import javax.servlet.http.HttpServlet;
    import javax.servlet.http.HttpServletRequest;
    import javax.servlet.http.HttpServletResponse;

    public class ClassName extends HttpServlet {
        public void doPost(HttpServletRequest request, HttpServletResponse response)
                throws ServletException, IOException {

            response.setContentType("text/html");

            try {
                Class.forName("com.mysql.jdbc.Driver");
                Connection con = DriverManager.getConnection(
                        "jdbc:mysql://localhost:3306/servlet", "USERNAME", "sss");

                PreparedStatement ps = con
                        .prepareStatement(“QUERY STATEMENT”);

            } catch (Exception ex) {
                System.out.println(ex);
            }
        }

    }
</pre>
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
            <a href="index.html"><img src="../img/webtech2.png" alt="logo"></a>
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