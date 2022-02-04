# backendchallenge

The project is done in Laravel ^8.75 Framework and supports PHP 7.3 and PHP 8.

##Requirements for the project
1. PHP ^7.3
2. LAMP or WAMP server
3. Composer for downloading the dependency files
4. POSTMAN or any API platform to test the project

###Installation
1. Go to your Project Folder
2. Git clone https://github.com/acmtps/backendchallenge.git or you can download the file
3. composer install or composer update
4. Setup configuration in .env files (for this project you can just clone the .env.example file)

##How to run and test the project
1. Open a terminal in your project folder and run "PHP artisan serve". This way your project will start at http://127.0.0.1:8000 (you can use http://localhost:8000)
2. Open POSTMAN or any API platform tools to run the APIs.

### For every API routes there are parameters date1, date2 and format(seconds, minutes, hours, years)
### In Header include on the API platform:
	Content-Type: multipart/form-data
	Accept: application/json
### Recommended date format Y-m-d


2.1. Find out the number of days between two datetime parameters.
		http://localhost:8000/api/getdaydiff
		KEY         VALUE
		date1       input your value
		date2       input your value
		format      input your value or can be null
	For example:
		date1 = 2018-11-12
		date2 = 2022-02-22

		Result:
		{
		    "success": true,
		    "numberofday": 1198,
		    "format": null
		}

2.2. Find out the number of weekdays between two datetime parameters.
		http://localhost:8000/api/getweekdays
		KEY         VALUE
		date1       input your value
		date2       input your value
		format      input your value or can be null
	For example:
		date1 = 2022-01-01
		date2 = 2022-01-31

		Result:
		{
		    "success": true,
		    "weekdays": 20,
		    "format": null
		}

2.3. Find out the number of complete weeks between two datetime parameters.
		http://localhost:8000/api/getweeknumber
		KEY         VALUE
		date1       input your value
		date2       input your value
		format      input your value or can be null
	For example:
		date1 = 2022-01-01
		date2 = 2022-01-31

		Result:
		{
		    "success": true,
		    "numberofweeks": 4,
		    "format": null
		}

2.4. Accept a third parameter to convert the result of (1, 2 or 3) into one of
	 seconds, minutes, hours, years.
	 	http://localhost:8000/api/getconverteddate
	 	KEY         VALUE
		date1       input your value
		date2       input your value
		format      input your value(seconds, minutes, hours or years)
	For example:
		date1 = 2022-01-01
		date2  = 2022-01-31
		format  = Hours


		{
		    "success": true,
		    "formated_date": 720,
		    "format": "Hours"
		}


2.5. Allow the specification of a timezone for comparison of input parameters from
	 different timezones.
	 	http://localhost:8000/api/getconverteddate
	 	KEY         VALUE
		date1       input your value along with 
		date2       input your value
		format      input your value
	For example:
	date1 = 2022-01-01T08:15:30-05:00
	date2 = 2022-01-31T24:20+05:45
	format = hours

	Result:
	{
	    "success": true,
	    "formated_date": 725,
	    "format": "hours"
	}


