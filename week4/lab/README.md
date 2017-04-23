## Assignment 

Please make sure you are using templates(view includes) and classes to organize this assignment.

Create a page that will allow me to upload a new file. I should only be allowed to upload images, text files, html files, word docs and excel files.  (20 points)

Make sure to add validation and let the user know why the file was not uploaded. Use exceptions. (10 points)

Create a view page that will display all my files uploaded in a list format with a number order. There should be a view button/link to each file to view more details.
There should be a delete button/link to remove the file. (10 points)

On the file read page be sure to display the file size, the file type, date created and a link to the file directly. (10 points).

On the file read page I should have action buttons that will allow me to delete the file. (10 points)

On the file read page, knowing the type of file it is display the images in an img tag, display text in a textarea tag(use new SplFileObject class), use the object tag or an iframe to display pdf files or HTML. All other files can stay as a link to direct download. (5 points) <object src="'+file+'"><embed src="'+file+'"></embed></object>

Add Links to help navigate the site. (5 points)

'txt' => 'text/plain',
'html' => 'text/html',
'pdf' => 'application/pdf',
'doc' => 'application/msword',
'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
'xls' => 'application/vnd.ms-excel',
'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
'jpg' => 'image/jpeg',
'png' => 'image/png',
'gif' => 'image/gif'

 

Add bootstrap and add CSS styles to your application. (5 points)