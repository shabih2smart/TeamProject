<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mass Bunk Planner</title>
        
<!--    Font Families    -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Times+New+Roman|Delius" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin+Sans|Amatic+SC" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo|Lora" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway|Lobster" />
        
<!--     Style Sheets    -->
        <link rel="stylesheet" href="CSS/bootstrap-grid.css" type="text/css">
        <link rel="stylesheet" href="CSS/index.css" type="text/css">
        
        <style>
            body {
              background: #ffa500;
            }
            form > div {
              position: relative;
              margin-bottom: 10px;
            }
            .theTooltip {
              -webkit-backface-visibility: hidden;
                      backface-visibility: hidden;
              will-change: opacity, visibility;
              max-width: 250px;
              border-radius: 5px;
              background-color: rgba(0,0,0,0.7);
              padding: 15px;
              color: #fff;
              box-sizing: border-box;
              display: inline-block;
              position: absolute;
              -webkit-transform-style: preserve-3d;
                      transform-style: preserve-3d;
              -webkit-transform: translate(15%, -50%);
                      transform: translate(15%, -50%);
              top: 50%;
              left: auto;
              right: auto;
              bottom: auto;
              visibility: hidden;
              margin: 0;
              opacity: 0;
              -webkit-transition: opacity 0.3s ease-out;
              transition: opacity 0.3s ease-out;
              z-index: 100;
            }
            .theTooltip:after {
              content: '';
              position: absolute;
              width: 0;
              height: 0;
              top: 50%;
              margin-top: -10px;
              left: -10px;
              border-top: 10px solid transparent;
              border-bottom: 10px solid transparent;
              border-right: 10px solid rgba(0,0,0,0.7);
            }
            label {
              display: inline-block;
              vertical-align: center;
            }
            input {
              background: #fff;
              border: 1px solid transparent;
              cursor: pointer;
              display: inline-block;
              overflow: visible;
              margin: 0;
              outline: 0;
              vertical-align: center;
              text-decoration: none;
              width: auto;
              border-radius: 3px;
              cursor: text;
              padding: 7px;
            }
            input:focus,
            input:active {
              outline: none;
            }
            .submitted input:invalid {
              border: 1px solid #f00;
            }
            .submitted input:invalid ~ .theTooltip {
              visibility: visible;
              opacity: 1;
            }
            .submitted input:valid ~ .theTooltip {
              -webkit-transition: opacity 0.3s, visibility 0s 0.3s;
              transition: opacity 0.3s, visibility 0s 0.3s;
            }
        </style>
    </head>

    <body>

       <form id="frm" action="action">
          <div>
            <label>Email</label>
            <input type="email" required="required"/><span class="theTooltip">Sahi se likho hutiya</span>
          </div>
          <div>
            <button formnovalidate="formnovalidate">OK</button>
          </div>
        </form>
        
        <script src="JS/jquery.min.js"></script>
        <script>
            document.querySelector('#frm').addEventListener('submit', e => {
              e.preventDefault();
              e.currentTarget.classList.add('submitted');
            });
        </script>
    </body>
</html>