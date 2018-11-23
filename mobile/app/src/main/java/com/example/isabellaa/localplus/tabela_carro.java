package com.example.isabellaa.localplus;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class tabela_carro extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tabela_carro);
    }

    void SairTabelaCarro(View view){
        finish();
    }

    void Novocadastro_carro(View view){
        Intent it = new Intent(this,cadastro_carro.class);
        startActivity(it);
    }
    void EditarTabelaCarro(View view){


    }
    void RemoverTabelaCarro(View view){


    }
}
