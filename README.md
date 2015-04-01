# LittleFrameworkPHP
Welcome to Little Framework PHP.  It's a MVC PHP framework that you may use in your small projects. Feel free to fork the repository to contribute with the improvement of this Framework.


# Creating a static view
1. First, we need to define a controller. Go to /inc/controllers/ and open Example.php. Every controller call index method as default page.


2. We need to load a view. Use method load from helper View like this: View::load("view_name"); and if you want to pass data use the next syntax View::load("view_name", $data);

3. Where is my view file? Go to /inc/views/ and open the example.php. See how the code works.
