             <h1>Welcome!</h1>
            
                var today = new Date();
                var hourNow = today.getHours();
                var greeting;

                if (hoourNow > 18) {
                    greeting = 'Good evening!';
                }
                else if (hourNow > 12){
                    greeting = 'Good morning!';
                }
                else {
                    greeting = 'Welcome!';
                }
                document.write('<h3>' + greeting + '</h3>');