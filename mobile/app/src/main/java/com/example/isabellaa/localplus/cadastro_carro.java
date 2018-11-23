package com.example.isabellaa.localplus;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.EditText;
import android.widget.Switch;

import com.example.isabellaa.localplus.entidade.Carro;

public class cadastro_carro extends AppCompatActivity {

    private Carro carro;
    private EditText placa;
    private EditText nome;
    private EditText marca;
    private EditText modelo;
    private EditText valorDoSeguro;
    private EditText valorDaLocacao;
    private EditText cor;
    private Switch ativo;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cadastro_carro);
        
    }
}
