<?php

/*
//========================================================================================================================\\
#  _______ ______  _    _ _______ __   _ _______ _______ ______              _____ _______ _______ __   _ _______ _______  #
#  |_____| |     \  \  /  |_____| | \  | |       |______ |     \      |        |   |       |______ | \  | |______ |______  #
#  |     | |_____/   \/   |     | |  \_| |_____  |______ |_____/      |_____ __|__ |_____  |______ |  \_| ______| |______  #
#  Coded by Leoko                                                                                                          #
\\========================================================================================================================//
*/

////////////////////////////////////////////////
//             MySQL-Data                     //
//                                     	      //
	//Database-Name
	define("DB_NAME", "epiz_30864229_licenses");

	//MySQL- Server-IP/Domanin
	define("HOST", "sql313.epizy.com");

	//MySQL-Account
  define("USERNAME", "epiz_30864229");
	define("PASSWORD", "qYT7Viitby");

//                                            //
////////////////////////////////////////////////

////////////////////////////////////////////////
//             Security                       //
//                                     	      //
	// This key will be used for the
	// cryptographic-key-authentication-protection
  // Required lenght: 36 [only 1 & 0]
	define("CKAP_KEY", "YecoF0I1M00tfgherUTgffgVHru11fughfTT");
  // If you change this key you will also
  // need to change it in the java component
  // by .setSecurityKey('Your-Key');
  
  // If enabled this will automatically redirect to https
  define("HTTPS", false);

//                                            //
////////////////////////////////////////////////

////////////////////////////////////////////////
//             Stats                          //
//                                     	      //
	// Whether license-requests will be logged
	// and displayed in the dashboard
	define("STATS", true);
	// You can disable this to avoid error-messages
	// if PHP does not has enought permissions
	// or to boost the performance [just a few milliseconds]

//                                            //
////////////////////////////////////////////////

////////////////////////////////////////////////
//             Admin-Account                  //
//                                     	      //
	// You will need this data to login
	define("ADMIN_USERNAME", "admin");
	define("ADMIN_PASSWORD", "dani0208");
  // To add more accs insert them into
	// the 'users' table on the MySQL-Server

//                                            //
////////////////////////////////////////////////

////////////////////////////////////////////////
//                Indexing                    //
//                                     	      //
	// Do not change this unless you
	// really know what are you doing!
	// Block search engines from indexing?
	define("NOINDEX", true);

	// Block search engines from
	// following the links?
	define("NOFOLLOW", false);

//                                            //
////////////////////////////////////////////////

// no ending tag to avoid accidental output
