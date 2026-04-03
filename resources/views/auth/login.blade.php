<div>
    <form action="{{route('login')}}" method="POST">
        @csrf

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Digite seu email" value="{{old('email')}}">
            @error('email')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>


        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" placeholder="Digite sua senha">
            @error('password')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>

        <button type="submit">Acessar</button>
    </form>
</div>
