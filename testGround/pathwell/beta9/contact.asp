<%
' Website Contact Form Generator 
' http://www.tele-pro.co.uk/scripts/contact_form/ 
' This script is free to use as long as you  
' retain the credit link  

' declare variables
Dim EmailFrom
Dim EmailTo
Dim Subject
Dim Company
Dim Name
Dim Title
Dim Email
Dim Automotive
Dim Aviation
Dim ConsumerProducts
Dim Medical
Dim Other
Dim Comment

' get posted data into variables
EmailFrom = "update@pathwell.com"
EmailTo = "sales@pathwellonline.com"
Subject = "UPDATE | pathwell_online"
Company = Trim(Request.Form("Company")) 
Name = Trim(Request.Form("Name")) 
Title = Trim(Request.Form("Title")) 
Email = Trim(Request.Form("Email")) 
Automotive = Trim(Request.Form("Automotive")) 
Aviation = Trim(Request.Form("Aviation")) 
ConsumerProducts = Trim(Request.Form("ConsumerProducts")) 
Medical = Trim(Request.Form("Medical")) 
Other = Trim(Request.Form("Other")) 
Comment = Trim(Request.Form("Comment")) 

' validation
Dim validationOK
validationOK=true
If (Trim(Name)="") Then validationOK=false
If (Trim(Email)="") Then validationOK=false
If (Trim(Comment)="") Then validationOK=false
If (validationOK=false) Then Response.Redirect("error.htm?" & EmailFrom)

' prepare email body text
Dim Body
Body = Body & "Company: " & Company & VbCrLf
Body = Body & "Name: " & Name & VbCrLf
Body = Body & "Title: " & Title & VbCrLf
Body = Body & "Email: " & Email & VbCrLf
Body = Body & "Automotive: " & Automotive & VbCrLf
Body = Body & "Aviation: " & Aviation & VbCrLf
Body = Body & "ConsumerProducts: " & ConsumerProducts & VbCrLf
Body = Body & "Medical: " & Medical & VbCrLf
Body = Body & "Other: " & Other & VbCrLf
Body = Body & "Comment: " & Comment & VbCrLf

' send email 
Dim mail
Set mail = Server.CreateObject("CDONTS.NewMail") 
mail.To = EmailTo
mail.From = EmailFrom
mail.Subject = Subject
mail.Body = Body
mail.Send 

' redirect to success page 
Response.Redirect("ok.htm?" & EmailFrom)
%>
