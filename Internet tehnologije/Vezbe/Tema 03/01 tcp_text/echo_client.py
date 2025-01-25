from socket import socket,AF_INET, SOCK_STREAM
import sys

# Create a TCP/IP socket
sock = socket(AF_INET, SOCK_STREAM)

# Connect the socket to the port where the server is listening
server_address = ('localhost', 10000)
print('Connecting to %s port %s' % server_address, file=sys.stderr)
sock.connect(server_address)

try:
    # Send data
    message = b'Ovo je poruka serveru.  Ponavlja se.'
    print('Sending: "%s"' % message, file=sys.stderr)
    sock.sendall(message)
    # Look for the response
    amount_received = 0
    amount_expected = len(message)
    
    while amount_received < amount_expected:
        data = sock.recv(16)
        amount_received += len(data)
        print('Received: "%s"' % data, file=sys.stderr)
finally:
    print('\nClosing socket', file=sys.stderr)
    sock.close()
