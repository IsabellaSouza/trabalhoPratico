package unigran.br.trabalhomobile;

import java.io.Serializable;
import java.util.Date;

public class entidade_funcionarios implements Serializable{
    private Integer id;
    private String nome;
    private Integer rg;
    private Integer cpf;
    private String endereco;
    private Date admissao;
    private Date demissao;
    private boolean ativoouinativo;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public Integer getRg() {
        return rg;
    }

    public void setRg(Integer rg) {
        this.rg = rg;
    }

    public Integer getCpf() {
        return cpf;
    }

    public void setCpf(Integer cpf) {
        this.cpf = cpf;
    }

    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }

    public Date getAdmissao() {
        return admissao;
    }

    public void setAdmissao(Date admissao) {
        this.admissao = admissao;
    }

    public Date getDemissao() {
        return demissao;
    }

    public void setDemissao(Date demissao) {
        this.demissao = demissao;
    }

    public boolean isAtivoouinativo() {
        return ativoouinativo;
    }

    public void setAtivoouinativo(boolean ativoouinativo) {
        this.ativoouinativo = ativoouinativo;
    }
}
