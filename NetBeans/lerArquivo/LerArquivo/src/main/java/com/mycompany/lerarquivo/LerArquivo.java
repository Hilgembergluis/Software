package com.mycompany.lerarquivo;
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */
import java.io.BufferedReader;
import java.io.File;
import java.io.FileFilter;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;

/**
 *
 * @author hilge
 */
public class LerArquivo {
    
 public static void main(String[] args) {
 // System.out.println("Hello World!");
 
 LerArquivo obj = new LerArquivo (); 
 obj.run();
 
    }
    public void run() {
       // throw new UnsupportedOperationException("Not supported yet."); // Generated from nbfs://nbhost/SystemFileSystem/Templates/Classes/Code/GeneratedMethodBody
    String ArqCSV = "arquivo.csv";
    BufferedReader br = null;
    String linha = " ";
    String csvDivisor = "";
    
    File diretorio = new File("C:/");

File[] listFiles = diretorio.listFiles(new FileFilter() {
    public boolean accept(File pathname) {
        return pathname.getName().startsWith(""); // apenas arquivos que começam com a letra "a"
    }
});

for(File f : listFiles) {
    System.out.println(f.getName());
}
    
    try{
       br = new BufferedReader(new FileReader(ArqCSV));
        while ((linha = br.readLine()) != null) {

            String[] pais = linha.split(csvDivisor);

            System.out.println("País [code= " + pais[pais.length-2] 
                                 + " , name=" + pais[pais.length-1] + "]");
    }
    }
   catch (FileNotFoundException e) {
        e.printStackTrace();
    } catch (IOException e) {
        e.printStackTrace();
    } finally {
        if (br != null) {
            try {
                br.close();
            } catch (IOException e) {
                e.printStackTrace();
            }
        }
    }
  } 
    
    
    
}
