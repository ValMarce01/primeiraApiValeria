package com.primeiraapirest.primeiraapi.controller;

import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/api")
public class Principal {
    @GetMapping
    public String metodo1(){
        return " retorno do metodo 1";
    }
    @PostMapping
    public String metodo2(){
        return " retorno do metodo 2";
    }
    @DeleteMapping
    public String metodo3(){
        return " retorno do metodo 3";
    }
    
    
}