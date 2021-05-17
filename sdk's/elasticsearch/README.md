# Elastic Search
ElasticSearch a rodar em localhost:9200

## Operações basicas

### Documentos

##### Criar index
```sh
curl -X PUT "localhost:9200/nome-do-indice"
```
##### Listar index alias
```sh
curl -X GET "localhost:9200/_alias"
```
##### Apagar index
```sh
curl -X DELETE "localhost:9200/nome-do-indice"
```

##### Criar Documento
```sh
curl -X POST "localhost:9200/nome-do-indice/_create/1" -H "Content-Type: application/json" -d'{"name":"Leonardo","job":"Dev"}'
```

##### Ler Documento

```sh
curl -X GET "localhost:9200/nome-do-indice/_doc/1"
```

##### Contar documentos de index 
```sh
curl -X GET "localhost:9200/nome-do-indice/_count"
```

##### Apagar documento
```sh
curl -X DELETE "localhost:9200/nome-do-indice/_doc/2"
```

##### Atualizar documento

```sh
curl -X POST "localhost:9200/nome-do-indice/_doc/2" -H "Content-Type: application/json" -d'{"name":"Leonardo","job":"Junior Dev"}'
```

##### Procurar documento

```sh
curl -X GET "localhost:9200/_search?q=dev"
```

###### Procurar por chave
```sh
curl -X GET "localhost:9200/_search?q=name:Leonardo"
```