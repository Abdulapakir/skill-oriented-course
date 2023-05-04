<%@ page language="java" %>
<html>
<head>
<title>JSP Response Page</title>
</head>
<body bgcolor="pink">
<center>
<h1>Student Details are</h1>
User Name is :<%=request.getParameter("un")%> </br>
Password is :<%=request.getParameter("pd")%></br>
Email is :<%=request.getParameter("eid")%></br>
Mobile No :<%=request.getParameter("mnb")%></br>
</center>
</body>
</html>