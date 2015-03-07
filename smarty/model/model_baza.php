<?php
class main
{
    
    //tablica z zawartoscia tab uzytkownik 
    private $uzytkownik = array();
    private $popularnosc = array();
    
    //polaczenie z baza
    public function connect_db()
    { 
      $db = new mysqli('mysql.cba.pl', 'mistrzjscriptu', 'MistrzJS666666',  'mistrzjs_cba_pl');
      if(!$db)
      {
        throw new exception ('Blad laczenia z baza danych');
      }
      else
      {
        return $db;
      }
    }
    public function wysw_pop_zdj()
    {
      $sql = $this->connect_db();
      if(!$result = $sql->query("SELECT * FROM zdjecia_uzytkownikow"))
      {
        echo ('Blad zapytania z baza danych');
      }
      else
      { 
        while($tmp = $result->fetch_assoc())
        {
        
        $this->popularnosc_zdj [] = $tmp;
        }
        return $this->popularnosc_zdj;
      }
    }
}
?>