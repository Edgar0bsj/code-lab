import os

acertos_erros = [0,0]

clear_terminal = lambda: os.system('cls' if os.name == 'nt' else 'clear')

def mostrar_status(acertou = False, stat=True):

    acertos_erros[0] += 1 if acertou else 0

    acertos_erros[1] += 1 if (not acertou) and stat else 0


    print('========= Score ========')
    print(f'Acertos: {acertos_erros[0]} | Erros: {acertos_erros[1]}')
    print('========================')
    
def verificar_resposta(pergunta, resposta):
    
    try:
        resposta = int(resposta)
        resposta = questions[pergunta]['Opções'][resposta]

        resposta = questions[pergunta]['Resposta'] == resposta

        return resposta
    except:
        resposta = False
        print('Resposta invalida!')
        return resposta





questions = {
    'pergunta1':{
        'Pergunta': 'Quanto é 2+2?',
        'Opções': ['1', '3', '4', '5'],
        'Resposta': '4',
    },
    'pergunta2':{
        'Pergunta': 'Quanto é 5*5?',
        'Opções': ['25', '55', '10', '51'],
        'Resposta': '25',
    },
    'pergunta3':{
        'Pergunta': 'Quanto é 10/2?',
        'Opções': ['4', '5', '2', '1'],
        'Resposta': '5',
    }
}
#================================================

while True:
    # Question 1
    clear_terminal()
    mostrar_status(stat=False)
    print(questions.get('pergunta1').get('Pergunta'))

    
    for n, alternativa in enumerate(questions['pergunta1']['Opções']):
        print(f'{n})', f'{alternativa }')


    resposta = input('-> ').strip()
    resposta = verificar_resposta('pergunta1', resposta)
    if resposta: print("Parabéns você acertou  !!!")
    input('Press enter to continue... ')

    # Question 2
    clear_terminal()
    mostrar_status(resposta)
    print(questions.get('pergunta2').get('Pergunta'))

    
    for n, alternativa in enumerate(questions['pergunta2']['Opções']):
        print(f'{n})', f'{alternativa }')


    resposta = input('-> ').strip()
    resposta = verificar_resposta('pergunta2', resposta)
    if resposta: print("Parabéns você acertou  !!!")
    input('Press enter to continue... ')

    # Question 3
    clear_terminal()
    mostrar_status(resposta)
    print(questions.get('pergunta3').get('Pergunta'))

    
    for n, alternativa in enumerate(questions['pergunta3']['Opções']):
        print(f'{n})', f'{alternativa }')


    resposta = input('-> ').strip()
    resposta = verificar_resposta('pergunta3', resposta)
    if resposta: print("Parabéns você acertou  !!!")
    input('Press enter to continue... ')


    clear_terminal()
    mostrar_status(resposta)
    input('Press enter to continue... ')
    break