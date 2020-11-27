# ISYS 1106/08  
# Software Engineering Project Management  

### Scenario:
Consider a parcel delivery company that has drivers who perform same day pickup and delivery (P&D) of parcels in metropolitan
Melbourne.
The company wants a easy-to-use web interface to book P&D jobs and to analyse statistics on the bookings, driver performance,
customers’ usage, etc. Jobs should be automatically dispatched by the system to the closest driver on the day. The company also
wants easy-to-use Android and iOS apps for drivers: Drivers should receive job details, report back to the central system the job
status, as well as see own statistics on the completed bookings, performance, etc.
Customers can sign-up (once) and login (regularly) via a web site, and from there they can book P&D jobs, check the status of
individual jobs, and view the history of all jobs they have booked. The system sends monthly invoices for the jobs completed during
the previous month. Jobs are charged based on number of kilometres between the pick-up and delivery addresses.
Drivers can login to the app on their smartphone (usually at the start of the day) which will inform the centralised system of their
location, so that their jobs can be dispatched. Drivers can view the details of the jobs allocated to them, as well as update the details of a job when they pick up the parcel, and again when they deliver the parcel.

Drivers logout of their apps at the end of their day to inform the system not to send them any further jobs. The app will periodically
(no less than every 2 minutes, if the vehicle is moving) send the drivers GPS location coordinates back to the central system, and will
also do so when a job status changes or a driver logs in or out of the system.
Managers can view reports of delivery statistics overall, as well as by driver and by customer. Managers can also reassign jobs from
one driver to another if an exceptional issue occurs (e.g., vehicle breakdown).
Managers reconcile customer payments against invoices, and can issue late payment penalties each fortnight that the invoice is late
in being paid. After two late penalties the third time the unpaid invoice is handed over to a debt collector, and the customer account
is suspended.  

#### Homepage  
![home page](/img/home.JPG)

#### Register  
![home page](/img/register.JPG)  

#### Login  
![home page](/img/login.JPG)  

#### Customer  
![home page](/img/customer.JPG)  

#### Admin  
![home page](/img/admins.JPG)  

#### Orders  
![home page](/img/orders.JPG)  


