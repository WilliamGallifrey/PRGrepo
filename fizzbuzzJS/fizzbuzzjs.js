for(var count = 1 ; count <= 100; count++)
	{
		
		if (count%3 == 0 || count%5 == 0)
		{

				if(count%3 == 0 && count%5 == 0) 
					console.log("fizbuzz");

				else 
					{
					if(count%3 == 0) console.log("fizz");
					if(count%5 == 0) console.log("buzz");
					}				
		}
		else {console.log(count);}
	}