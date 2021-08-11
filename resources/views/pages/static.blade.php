@extends('layout.app')
@section('title', "Index Page")
@section('keywords', "index page, explain pages, how to reach, wd school")
@section('description', "Index page for marking")


@section('content')

<div class="d-flex justify-content-center">
    <h3 class="display-3 fw-bold map-header my-3 custom-border">
        Website Index
    </h3>

</div>


<div class="container">
    <table class="table custom-border rounded">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Link</th>
                <th scope="col">How to reach organically (-> = mouse click)</th>
                <th scope="col">Description</th>

            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">1</th>
                <td> <a class="text-decoration-none" href="/">Landing Page</a></td>
                <td>Go to website Homepage </td>
                <td>Landing Page of website with upcoming important school dates and images of students includes 3 images </td>
            </tr>
                                                                                <tr>
                <th scope="row">2</th>
                <td> <a class="text-decoration-none" href="/facultystaff">Faculty and Staff</a></td>
                <td>From Homepage->Faculty and Staff->On Navigational Bar</td>
                <td>Page with all faculty and staff of WD school, includes 40+ images</td>
            </tr>
                                                                                <tr>
                <th scope="row">3</th>
                <td> <a class="text-decoration-none" href="/schoolmap">Interactive School Map</a></td>
                <td>From Homepage->School Map->On Navigational Bar</td>
                <td>Interactive School map with information where important locations are and how to get to them </td>
            </tr>

            <tr>
                <th scope="row">4</th>
                <td> <a class="text-decoration-none" href="/aboutus">About Us</a></td>
                <td>From Homepage->About Us->On Navigational Bar</td>
                <td>Information about school and its origins as well as an image of the opening day includes 1 image</td>
            </tr>

            <tr>
                <th scope="row">5</th>
                <td> <a class="text-decoration-none" href="/contactus">Contact Us</a></td>
                <td>From Homepage->contact@wbschool.coms->On Footer Bar</td>
                <td>Contact Us form that will submit users details to administrative email account such that their issue can be looked into </td>
            </tr>

            <tr>
                <th scope="row">6</th>
                <td> <a class="text-decoration-none" href="/privacy">Privacy</a></td>
                <td>From Homepage->Privacy Policy->On Footer Bar</td>
                <td> Information about the WD school privacy policy </td>
            </tr>

            <tr>
                <th scope="row">7</th>
                <td> <a class="text-decoration-none" href="/login">Login</a></td>
                <td>From Homepage->Login->Student Login or Admin Login->On Navigational Bar</td>
                <td>Login page for students and administative accounts</td>
            </tr>

            <tr>
                <th scope="row">8</th>
                <td> <a class="text-decoration-none" href="/Enrolled">Enrolled Courses</a></td>
                <td > From Homepage->Login->Student Login->On Navigational Bar->Enter Login Information->Submit->My Courses->On Nav Bar</td>
                <td>Display the currently logged in students enrolled courses </td>
            </tr>

            <tr>
                <th scope="row">9</th>
                <td> <a class="text-decoration-none" href="/Course">Available Courses</a></td>
                <td>From Homepage->Login->Student Login or Admin Login->On Navigational Bar->Enter Login Information->Submit->Register for students, Edit Courses for admin->On Nav Bar</td>
                <td>For students page is both dynamic and static, displays all available courses in paginated form with the ability to search through 50+ courses <br><br> For admins page is both dynamic and static, displays all courses available to edit while also having course search feature</td>
            </tr>

            <tr>
                <th scope="row">10</th>
                <td> <a class="text-decoration-none" href="/Course/create">Add Course</a></td>
                <td>From Homepage->Login->Admin Login->On Navigational Bar->Enter Login Information->Submit->Add Course->On Nav Bar</td>
                <td>Page allowing administrator to add new courses to the database of courses, once course is submitted will send you to edit course page for newly created course</td>
            </tr>

            <tr>
                <th scope="row">11</th>
                <td> <a class="text-decoration-none" href="/Course/create">Edit Users</a></td>
                <td>From Homepage->Login->Admin Login->On Navigational Bar->Enter Login Information->Submit->Edit Users->On Nav Bar</td>
                <td>Both static and dynamic page for administrators. Firstly shows all user records and allows for specific user search</td>
            </tr>

            <tr>
                <th scope="row">12</th>
                <td> <a class="text-decoration-none" href="/Course/Advanced%20Algorithm%20Design%20and%20Data">Course Description</a></td>
                <td>From Homepage->Login->Student Login or Admin Login->On Navigational Bar->Enter Login Information->Submit->Register for students, Edit Courses for admin->On Nav Bar->Blue Course Name</td>
                <td>All courses have their own course page and thus their are 50+ static courses pages and they will display differenty depending on if adminsitrator or student is logged in <br><br> For students will show the course information on the left side and will allow them to register or remove said course from their enrolled courses <br><br> For admins will allow the course title, code, instructor, description and date to be edited or the course to be entirely removed </td>
            </tr>

            <tr>
                <th scope="row">13</th>
                <td> <a class="text-decoration-none" href="/Course/1">Edit Users</a></td>
                <td>From Homepage->Login->Student Login or Admin Login->On Navigational Bar->Enter Login Information->Submit->Register for students, Edit USers for admin->On Nav Bar->Blue User Name</td>
                <td>All users have their own user page, thus can have hundreds of static pages depending on the number of registered users. They can be reached by going to edit users page and clicking on the name allowing the administrator to remove or edit user details</td>
            </tr>


        </tbody>
    </table>
</div>


<div class="my-4 container ratio ratio-16x9 rounded">
    <video controls class="rounded" src="{{asset("video/resize.mp4")}}"></video>
</div>



@endsection
