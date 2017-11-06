<html>
    <head>
        
        <script>
            
            function mis(){
                alert("jammer dan");
                   document.getElementById('A1').innerHTML = 'Mis!';
                    document.getElementById('A1').style.backgroundColor = 'red';
                }
            function raak (){
                alert("lekker dan");
                    document.getElementById('B1').innerHTML = 'Raak!';
                    document.getElementById('B1').style.backgroundColor = 'green';        
            }
            
         </script>
        <style>
            table , tr, td {
                border:1px solid black;
            
        </style>
        
        
    </head>
    <body>
    <center>
        
        <h1>Zeeslag</h1>	

                <p>Klik om te schieten!</p>
        
        <table>
            <tr>
                <?php
                for($x =0;$x<10;$x++){
                    echo '<td><button onclick="mis()" type="button" id="A1">^</button></td>';
                }
                
                ?>
            </tr>
            <tr>
                <?php
                for($x =0;$x<10;$x++){
                    echo '<td><button onclick="raak()" type="button" id="B1">^</button></td>';
                }
                
                ?>
            </tr>
            <tr>
                <?php
                for($x =0;$x<10;$x++){
                    echo '<td><button onclick="kleur()" type="button" id="C1">^</button></td>';
                }
                
                ?>
            </tr>
            <tr>
                <?php
                for($x =0;$x<10;$x++){
                    echo '<td><button onclick="kleur()" type="button" id="D1">^</button></td>';
                }
                
                ?>
            </tr>
            <tr>
                <?php
                for($x =0;$x<10;$x++){
                    echo '<td><button onclick="kleur()" type="button" id="E1">^</button></td>';
                }
                
                ?>
            </tr>
            <tr>
                <?php
                for($x =0;$x<10;$x++){
                    echo '<td><button onclick="kleur()" type="button" id="F1">^</button></td>';
                }
                
                ?>
            </tr>
            <tr>
                <?php
                for($x =0;$x<10;$x++){
                    echo '<td><button onclick="kleur()" type="button" id="G1">^</button></td>';
                }
                
                ?>
            </tr>
            <tr>
                <?php
                for($x =0;$x<10;$x++){
                    echo '<td><button onclick="kleur()" type="button" id="H1">^</button></td>';
                }
                
                ?>
            </tr>
            <tr>
                <?php
                for($x =0;$x<10;$x++){
                    echo '<td><button onclick="kleur()" type="button" id="I1">^</button></td>';
                }
                
                ?>
            </tr>
            <tr>
                <?php
                for($x =0;$x<10;$x++){
                    echo '<td><button onclick="kleur()" type="button" id="J1">^</button></td>';
                }
                
                ?>
            </tr>
            
           
        </table>
    </center>
    </body>
</html>
