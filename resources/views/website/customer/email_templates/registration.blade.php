<b>Dear {{ $customer["name"] }},</b>
<br>
<p>
    Congratulations and a warm welcome to the Khulna Divisional Association of Buffalo – your gateway to a vibrant
    community
    of like-minded individuals! 🌟 We are thrilled to have you on board, and we can't wait to embark on this exciting
    journey together.
</p>

<p>
    Your registration is complete, and you are now officially a customer of Khulna Divisional Association of Buffalo. Here
    are your login details:
</p>

<table style="width: 100%; border-collapse: collapse; border: 1px solid #dddddd; margin: 20px 0;">
    <tr style="border: 1px solid #dddddd; background-color: #f2f2f2;">
        <th style="border: 1px solid #dddddd; padding: 8px; text-align: left;">🔐 Registered ID</th>
        <td style="border: 1px solid #dddddd; padding: 8px;">{{ $customer["email"] }}</td>
    </tr>

    <tr style="border: 1px solid #dddddd; background-color: #ffffff;">
        <th style="border: 1px solid #dddddd; padding: 8px; text-align: left;">🔑 Password</th>
        <td style="border: 1px solid #dddddd; padding: 8px;">{{ $customer["password"] }}</td>
    </tr>

    <tr style="border: 1px solid #dddddd; background-color: #f2f2f2;">
        <th style="border: 1px solid #dddddd; padding: 8px; text-align: left;">🌐 Website URL</th>
        <td style="border: 1px solid #dddddd; padding: 8px;"><a href="{{ route('website.home') }}">{{ route('website.home') }}</a></td>
    </tr>
</table>

<p>
    Please keep these details secure and use them to access our exclusive Customer-only features, connect with fellow
    customers,
    and explore the enriching experiences we have in store for you.
</p>

<p>
    Feel free to dive into our forums, events, and discussions to make the most out of your Khulna Society customers.
    Your unique perspective and contributions are highly valued.
</p>

<p>
    If you have any questions or need assistance, our support team is here for you. Don't hesitate to reach out at <a
        href="mailto:info@kdabny.org">info@kdabny.org</a>.
</p>

<p>
    Once again, congratulations on becoming a part of the Khulna Divisional Association of Buffalo!
    We look forward to building lasting connections and creating wonderful memories together.
</p>

Best regards,<br>
Khulna Society Team
